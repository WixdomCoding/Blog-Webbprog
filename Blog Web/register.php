<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<h1>Register</h1>
    <form action="#" method="POST">
        <label for="namn">Namn:</label>
        <input type="text" id="namn" name="namn">
        <br><br>
        <label for="namn">Password:</label>
        <input type="text" id="password" name="password">
        <br><br>
        <input type="submit" name="save" value="Save">
    </form>
<h2>Already have an account?</h2>
<a href='index.php'>Log In</a>
    <?php 

    include "config.php";

    if(isset($_POST["save"])) {
        $username = $_POST["namn"];
        $password = $_POST["password"];

        if($username == "" || $password == "")
        {
            echo "<p> An error occurred. Please make sure you fill in both fields.";
        }
        else 
        {
            echo "<br><br>Namn: $username, Password: $password <br>";

            $sql = "INSERT INTO user_info (username, password)
                    VALUES ('$username', '$password')";
    
            $result = $conn->query($sql);
            if ($result == TRUE && $username != "" && $password != "") {
                echo "New record created successfully.";
                header('Location: index.php');
            }
            else {
                echo "Error:". $sql . "<br>". $conn->error;
            }
        }

        $conn->close();
    }
    ?>
</body>
</html>