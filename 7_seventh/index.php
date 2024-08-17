<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius"/><br>
        <input type="submit" value="calculate"/>
    </form><br>
</body>
</html>
<?php
  $radius = $_POST["radius"];
  $circumference = null;
  $area = null;
  $volume = null;

  // Circumference = 2πr
  $circumference = 2 * pi() * $radius;
  $circumference = round($circumference, 2);

  // Area = πr²
  $area = pi() * pow($radius, 2);
  $area = round($area, 2);

  // Volume = 4/3πr³
  $volume = 4 / 3 * pi() * pow($radius, 3);
  $volume = round($volume, 2);

  echo "Circumference = {$circumference}cm<br>";
  echo "Area = {$area}cm²<br>";
  echo "Volume = {$volume}cm³<br>";