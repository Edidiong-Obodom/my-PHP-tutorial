<?php
  // Logical operations = combine conditional statements
  // if(condition1 && condition2)
  $temp = 15;
  $cloudy = true;

  // && = True if both conditions are true
  //   if ($temp >= 0 && $temp <= 30) {
  //     echo "The weather is good.";
  //   } else {
  //     echo "The weather is bad.";
  //   }


  // || = True if at least 1 condition is true
    if ($temp < 0 || $temp > 30) {
      echo "The weather is bad.<br>";
    } else {
      echo "The weather is good.<br>";
    }


  // ! = True if false. False if true.
  if (!$cloudy) {
    echo "It's sunny.";
  } else {
    echo "It's cloudy.";
  }
  