<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GET</h1>
    <form action="index.php" method="get">
        <label>username:</label><br>
        <input type="text" name="username"/><br>
        <label>password:</label><br>
        <input type="password" name="password"/><br>
        <input type="submit" value="Log in"/>
    </form>

    <h1>POST</h1>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"/><br>
        <label>password:</label><br>
        <input type="password" name="password"/><br>
        <input type="submit" value="Log in"/>
    </form>
</body>
</html>
<?php
   // $_GET, $_POST = Special variables used to collect data from an HTML form
   //                 data is sent to the file in the action attribute of <form>
   //                 <form action="some_file.php" method="get">

   // $_GET = Data is appended to the URL
   //         NOT SECURE
   //         char limit
   //         Bookmark is possible w/ values
   //         Can be Cached
   //         Better for a search page
   echo "{$_GET["username"]} <br>";
   echo $_GET["password"] . '<br>';

   // $_POST = Data is packed inside the body of the HTTP request
   //          MORE SECURE
   //          No data limit
   //          Cannot Bookmark
   //          Are not Cached
   //          Better for submitting credentials
   echo "{$_POST["username"]} <br>";
   echo $_POST["password"] . '<br>';
