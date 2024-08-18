<?php
// cookies
setcookie("fav_food", "Afang soup", time() + (86400 * 2), "/");
// setcookie("fav_food", "Afang soup", time() - 0, "/"); // To delete
setcookie("fav_drink", "Chi Exotic", time() + (86400 * 2), "/");
//   setcookie("fav_drink", "Chi Exotic", time() - 0, "/"); // To delete

//   foreach ($_COOKIE as $key => $value) {
//     echo  $key . " => ". $value . "<br>";
//   }

if (isset($_COOKIE["fav_food"])) {
    echo "Buy some {$_COOKIE["fav_food"]} !!!";
} else {
    echo "I don't know your favorite food";
}
