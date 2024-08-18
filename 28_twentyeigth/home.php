<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <form action="home.php" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>
    <hr>
    <h1>Session</h1>
</body>

</html>
<?php
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"];

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}
?>