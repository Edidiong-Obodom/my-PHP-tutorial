<?php
  // for loops = repeat some code a certain amount of times
  $number_of_times = 6;

  echo "<h1>Increment</h1>";
  for ($i=0; $i < $number_of_times; $i++) { 
    $n = $i + 1;
    echo "{$n}, Hello world <br>";
  }

  echo "<h1>Decrement</h1>";
  for ($i=$number_of_times; $i > 0; $i--) { 
    echo "{$i}, Hello world <br>";
  }
  
  echo "<h1>Increment by 2</h1>";
  for ($i=0; $i < $number_of_times; $i+=2) { 
    $n = $i + 1;
    echo "{$n}, Hello world <br>";
  }
  
  echo "<h1>Decrement by 2</h1>";
  for ($i=$number_of_times; $i > 0; $i-=2) { 
    echo "{$i}, Hello world <br>";
  }