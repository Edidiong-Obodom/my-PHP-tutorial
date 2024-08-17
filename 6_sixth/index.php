<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x"/><br>
        <label>y:</label>
        <input type="text" name="y"/><br>
        <label>z:</label>
        <input type="text" name="z"/><br>
        <input type="submit" value="total"/>
    </form>
</body>
</html>
<?php
  $x = $_POST["x"];
  $y = $_POST["y"];
  $z = $_POST["z"];

  // Returns an absolute value of a number i.e abs(-4) = 4
  //$total = abs($x);

  // Rounds up or down a decimal
  // $total = round($x);

  // Always rounds down
  // $total = floor($x);

  // Always rounds up
  // $total = ceil($x);

  // Square root
  // $total = sqrt($x);

  // Raise to the power
  // $total = pow($x, $y);

  // Returns the variable with the highest value
  // $total = max($x, $y, $z);

  // Returns the variable with the lowest value
  // $total = min($x, $y, $z);

  // Returns the value of pi: 3.1415926535898
  // $total = pi();

  // Returns a random number to 2billion
  // $total = rand();

  // Returns a random number between A and B
  $total = rand($x, $y);

  echo $total;
