<?php
session_start();
include("connection.php");
include("function.php");

//  $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ALPHA TECH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom css file link -->
    <link rel="stylesheet" href="../assets/css/index_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="shortcut icon" type="image/jpg" href="/ALPHA TECH/Images/logo-small.ico" />
</head>

<body>
    <style>



    </style>
    <!----Content---->
    <div class="content">

        <h3>WELCOME</h3>
        <div class="image">
            <img src="/PAYMNGT/images/company.png" alt="logo" width="200" height="200">
        </div>
        <h1>Payroll <span>Management</span><br> System</h1>
    </div>


    <div class="login-box">
        <a href="login.php">START SESSION</a>
    </div>

</body>

</html>