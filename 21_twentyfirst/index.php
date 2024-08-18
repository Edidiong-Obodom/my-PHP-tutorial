<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Normal</h3>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <h3>Array</h3>
    <!-- Array -->
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    $foods = array();

    if (isset($_POST["foods"])) {
        $foods = $_POST["foods"];
        echo "<br>Array<br>";
        foreach ($foods as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
    } else {
        echo "<br>Normal<br>";
        foreach ($_POST as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
    }
}
