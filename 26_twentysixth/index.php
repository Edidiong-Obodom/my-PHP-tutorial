<?php
  // include() = Copies the content of a file (php, html, txt)
              // and includes it in your php file.
              // Sections of our website become reusable
              // Changes only need to be made in one place
    include("header.html")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is our Home page, <br>
    stuff about our home page can go here.
</body>
</html>
<?php
  include("footer.html")
?>