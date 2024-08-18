<?php
//string methods

$username = "Abarai renji ";
$phone = "123-456-789";

//   $username = strtoupper($username);
//   $username = strtolower($username);
  $username = trim($username);
//   $username = str_pad($username, 30, ".");
//   $username = str_replace("-", " ", $phone);
//   $username = strrev($username);
//   $username = str_shuffle($username);
// $equals = strcmp($username, "dhdh");
// $username = strlen($username);
$index = strpos($username, " ");
$firstName = substr($username, 0, 6);
$lastName = substr($username, -5);
$fullName = explode(" ", $username);
$imploded = array("Abarai", "renji");
$imploded = implode(" ", $imploded);

echo $imploded . "<br>";
echo $firstName . "<br>";
echo $lastName . "<br>";
echo $username . "<br>";
echo $fullName[0] . " " . $fullName[1] . "<br>";
echo $index;
