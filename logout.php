<?php
    include('functions.php');

    session_start();
    unset($_SESSION['islogged']);
    unset($_SESSION["id"]);
    unset($_SESSION["un"]);
    unset($_SESSION["pwd"]);

    redirect("login.php");
?>