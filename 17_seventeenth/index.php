<?php
  // array = a variable which can hold more than 1 value at a time
  
  // Instead of
  //   $food_1 = "apple";
  //   $food_2 = "orange";
  //   $food_3 = "banana";
  //   $food_4 = "coconut";

  $foods = array("apple", "orange", "banana", "coconut");

  // Other array methods

  // Changes a value in an array
  // $foods[0] = "pineapple";

  // Adds more values to the end of an array
  // array_push($foods, "pineapple");
  // array_push($foods, "pineapple", "kiwi");

  // Removes the value at the end of an array
  // array_pop($foods);

  // Removes the value at the beginning of an array
  // array_shift($foods);

  // Creates a new array with reversed values
  // $foods = array_reverse($foods);

  // similar to js array.length
  $count = count($foods);
  echo $count . " foods in the array.<br>";

  foreach ($foods as $food) {
    echo $food . "<br>";
  }