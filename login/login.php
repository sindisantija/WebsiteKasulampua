<?php
    require 'process.php';

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
        if( mysqli_num_rows($result) > 0){
            $row =mysqli_fetch_assoc($result);
            header("Location:../index.html");
        }
        $error = true;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Admin</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h1>Login Admin</h1>

    <?php if(isset($error)): ?>
        <p style="color:red;">username/password salah</p>
    <?php endif; ?>

        <form action="" method="post" id="form">
            <ul>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <button type="submit" name="login" id="btn">Login</button>
            </ul>
        </form>
        
    </body>
</html>
