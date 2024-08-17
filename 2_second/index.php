<?php
   $name = "Edidiong Obodom";
   $food = "Afang soup";
   $email = "fakeemail@gmail.com";

   $age = 17;
   $users = 2;
   $items = 3;

   $gpa = 4.53;
   $price = 6.99;
   $taxRate = 5.1;

   $employed = true;
   $online = false;
   $forSale = true;

   $total = null;

   echo "Hello {$name}<br>";
   echo "I know you like {$food}<br>";
   echo "Hello {$email}<br><br>";

   echo "{$name} is {$age} years old.<br>";
   echo "There are {$users} users online.<br>";
   echo "You would like to buy {$items} items.<br><br>";

   echo "Your GPA is {$gpa}<br>";
   echo "Your Shawarma costs \${$price}<br>";
   echo "Your sales tax rate is: {$taxRate}%<br><br>";

   echo "Online status: {$online}<br>";
   echo "You have {$employed} job(s)<br><br>";

   echo "You have ordered {$items} X {$food}<br>";
   $total = $items * $price;
   echo "Your total is: \${$total}"
?>