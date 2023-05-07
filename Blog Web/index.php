<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<h1>Log In</h1>
<form method="post" action="index.php">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  <br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  <br><br>
  <input type="submit" name="save" id="save" value="Log In">
</form>
<h2>Don't have an account?</h2>
<a href='register.php'>Register</a>
<br>
    <?php 

    include "config.php";
    if(isset($_POST["save"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $conn->prepare("SELECT * FROM user_info WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);

        $stmt->execute();

        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows === 1) {
            $_SESSION["namn"] = $username;
            echo "Logging in...";
            header('Location: main.php');
        } else {
            echo "User does not exist.";
        }
        $conn->close();
        
    }
    ?>



</body>
</html>