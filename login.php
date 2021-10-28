<?php
    require_once('mysqli_connect.php');
    require('functions.php');
    session_start();

    if (isset($_SESSION['islogged']) && $_SESSION['islogged'] == true) {
        redirect("index.php");
    } else {
        if(isset($_POST['submit'])){
            $un = $_POST['un'];
        $pwd = $_POST['pwd'];
    
        $query = "SELECT * FROM `tbl_users` WHERE username = '".$un."' AND password = '".$pwd."' limit 1;";
        
        $response = @mysqli_query($dbc, $query);
        if(mysqli_num_rows($response) == 1){
            $_SESSION["id"] = mysqli_fetch_array($response)["id"];
            $_SESSION["un"] = $un;
            $_SESSION["pwd"] = $pwd;
            $_SESSION["admin"] = mysqli_fetch_array($response)["is_admin"];
            $_SESSION["islogged"] = true;
            redirect("index.php");
        }
        else{
            redirect("login.php");
        }
        }
        
    
        mysqli_close($dbc);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Postly | Login</title>
</head>
<body>
    <div class="login">
        <div class="logo">
            <h1 class="center">POSTLY</h1>
        </div>
        <form action="login.php" method="post" class="login-form">
            <label for="un" class="form-label">Username</label>
            <input type="text" class="text form-input" name="un" placeholder="Enter Username">
            <label for="pwd" class="form-label">Password</label>
            <input type="password" class="text form-input" name="pwd" placeholder="Enter Password">
            <input type="submit" value="Login" class="submit form-input" name="submit">
        </form>
        <input type="button" value="Register" class="submit form-input" name="submit">
    </div>
    <div class="footer">
        <p>&copy; All Rights Reserved. Developed & Designed By Mohamed Moustafa.</p>
    </div>
    
</body>
</html>