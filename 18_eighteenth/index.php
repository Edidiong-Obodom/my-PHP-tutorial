<?php
  // associative arrays = arrays made up of key => value pairs

  // countries => capitals
  $capitals = array("USA" => "Washington D.C",
                    "Japan" => "Kyoto",
                    "South Korea" => "Seoul",
                    "India" => "New Delhi",
                    );
  // Some methods
  // $capitals["USA"] = "Las Vegas";
  // $capitals["China"] = "Beijing";

  // Get keys
  // $keys = array_keys($capitals);
  // foreach ($keys as $key) {
  // echo $key . "<br>";
  // }

  // Get values
  // $values = array_values($capitals);
  // foreach ($values as $value) {
  //  echo $value . "<br>";
  // }

  // echo "<br>";

  // Flip key and value
  // $capitals = array_flip($capitals);


  foreach ($capitals as $key => $value) {
    echo  $key . " => ". $value . "<br>";
  }
  // id => username
  // item => price