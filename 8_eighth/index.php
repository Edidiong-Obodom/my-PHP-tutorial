<?php
  // if statement = if some condition is true, do something
  //                if condition is false, don't do it
  $age = 151;

  if ($age == 50) {
    # code...
    echo "You may enter this site, Golden boy.";
  } elseif ($age >= 18 && $age <= 99) {
    # code...
    echo "You may enter this site";
  } elseif ($age <= 0) {
    echo "That wasn't a valid age";
  } elseif ($age >= 100) {
    echo "You are too old fam";
  } else {
    echo "You must be 18+ to enter";
  }