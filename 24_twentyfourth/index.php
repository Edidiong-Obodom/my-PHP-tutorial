<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"/><br>
        <label>age:</label><br>
        <input type="text" name="age"/><br>
        <label>email:</label><br>
        <input type="text" name="email"/><br>
        <input type="submit" name="login" value="Log in"/>
    </form>
</body>
</html>
<?php
  // Sanitize input from XXS
  // <script> alert("You have a virus") </script>
  if (isset($_POST["login"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo "Hello {$username}<br>";
    echo "{$email}<br>";
    echo "{$age} years old boy.<br>";
  }