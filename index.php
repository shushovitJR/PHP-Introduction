<?php
    include("db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
        <form action="index.php" method="post">
        <h2>Welcome to Fakebook!</h2>
        username: <br>
        <input type="text" name="username" id=""><br>
        password: <br>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="submit" value="register">
    </form>
</body>
</html>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password");
        if (empty($username)){
                echo "Please enter a username <br>";
        }
        elseif(empty($password)){
            echo "Please enter a password <br>";
        }
        else{
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) 
                    VALUES ('$username','$hash')";
            try{
                mysqli_query($mysqli,$sql);
            echo "You are now registered";
            }
            catch(mysqli_sql_exception){
                echo "error in taking data!!";

            }
        }
    }


    mysqli_close($mysqli);
?>