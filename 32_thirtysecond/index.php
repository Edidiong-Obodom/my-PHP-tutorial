<?php
$errorMsg = "";

// Checks if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // DB connection
  include("database.php");

  // Sanitizes user input
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  // If any input is empty throw an error
  if (empty($username)) {
    $errorMsg = "Missing username.";
  } elseif (empty($password)) {
    $errorMsg = "Missing password.";
  } else {
    // Check if user exists already
    $check = "SELECT * FROM users WHERE user = '{$username}'";

    try {
      $getUser = mysqli_query($conn, $check);
      if (mysqli_num_rows($getUser) > 0) {
        // Throw error if user already exists
        $row = mysqli_fetch_assoc($getUser);
        $errorMsg = "{$row["user"]} already exists!";
      } else {
        // Continue with insertion if all criteria are met
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, password) 
                 VALUES ('{$username}', '{$hash}')";

        try {
          mysqli_query($conn, $sql);
          $errorMsg = "User is now registered.";
        } catch (mysqli_sql_exception) {
          $errorMsg = "Could not register user.";
        }
      }
    } catch (mysqli_sql_exception) {
      $errorMsg = "Oops something went wrong...";
    }
  }
  mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="users.php">Users</a>
  <hr>
  <h1>Sign Up</h1>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <?php if (!empty($errorMsg)) echo "<div>{$errorMsg}</div>"; ?>
    <label>username:</label><br>
    <input type="text" name="username" /><br><br>
    <label>password:</label><br>
    <input type="password" name="password" /><br><br>
    <input type="submit" value="Log in" />
  </form>
</body>

</html>