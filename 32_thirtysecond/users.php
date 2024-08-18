<?php
// DB connection
include("database.php");

$sql = "SELECT * FROM users";

$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
} else {
    echo "No user found";
}
