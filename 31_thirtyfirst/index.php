<?php
// hasshing
$password = "Bankai";

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("Shikai", $hash)) {
    echo "Correct";
} else {
    echo "Wrong";
}