<?php
   // Arithmetic in PHP
   // Arithmetic operators
   // + - * / ** %
   $x = 10;
   $y = 2;
   $z = null;

   // $z = $x + $y;
   // $z = $x - $y;
   // $z = $x * $y;
   // $z = $x / $y;
   // $z = $x ** $y; // raise to the power
   $z = $x % $y; // modulo (Remainder of every division)

   echo $z;
   echo "<br><br>";
   
   // Increment or Decrement operators
   // ++, --
   $counter = 0;
   $counter++;

   echo "{$counter}<br>";
   $counter--;
   echo "{$counter}<br>";
   $counter += 4;
   echo "{$counter}<br>";
   $counter -= 2;
   echo "{$counter}<br><br>";

   // Operator Precedence
   // ()
   // **
   // * / %
   // + -
   $total = 1 + 2 - 3 * 4 / 5 ** 6;

   echo $total;