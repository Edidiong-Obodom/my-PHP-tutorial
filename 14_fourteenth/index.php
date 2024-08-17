<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count up to and down from:</label><br>
        <input type="text" name="counter"/><br>
        <button type="submit"> start </button>
    </form><br>
</body>
</html>
<?php
  $counter = $_POST["counter"];

  echo "<h1>Count up to</h1>";
  for ($i=1; $i <= $counter; $i++) { 
    echo $i . "<br>";
  }

  echo "<h1>Count down from</h1>";
  for ($i=$counter; $i > 0; $i--) { 
    echo $i . "<br>";
  }