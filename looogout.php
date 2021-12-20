<?php
require_once "./template/header.php";

session_start();
echo "<div class='form'><h3>You are logged in successfully.</h3><br/>Click here to <a href='loogout.php'>logout</a></div>";
//if (session_destroy()) // Destroying All Sessions
{
    //header("Location: loogin.php"); // Redirecting To Home Page
}

require_once "./template/footer.php";
