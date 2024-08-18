<?php
  // function
  function happyBirthday ($first_name) {
    echo "Happy birthday dear {$first_name}!<br>";
    echo "Happy birthday to you...<br><br>";
  }

  function isEven (int $integer) {
    $remainder = $integer % 2;

    if ($remainder === 0) {
        return "even";
    } else {
        return "odd";
    }
  }

  $valueCheck = isEven(10);

  happyBirthday("Eddy");
  echo $valueCheck;