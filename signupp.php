<?php

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php
    require('functions\userdbconnect.php');
    require_once "template\header.php";
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con, $username); //escapes special characters in a string
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '" . md5($password) . "', '$email', '$trn_date')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='loogin.php'>Login</a></div>";
        }
    } else {
    ?>
        <div class="form">

            <center>
                <h1>Registration</h1>
                <form name="registration" action="" method="post">
                    <input type="text" name="First-name" placeholder="First-name" required /><br><br>
                    <input type="text" name="Last-name" placeholder="Last-name" required /><br><br>
                    <input type="text" name="username" placeholder="Username" required /><br><br>
                    <input type="email" name="email" placeholder="Email" required /><br><br>
                    <input type="password" name="password" placeholder="Password" required /><br><br>
                    <input type="submit" name="submit" value="Register" />
                </form>
            </center>
            <br /><br />

        </div>
    <?php }
    require_once "./template/footer.php"; ?>
</body>

</html>