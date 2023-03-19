<?php
session_start();
include("connection.php");
//include("function.php");

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/register_style.css">
    <link rel="shortcut icon" type="image/jpg" href="/ALPHA TECH/Images/logo-small.ico" />
</head>

<body>

    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Register</h1>
                    <form action="register_user.php" method="POST">
                    <select name="usertype" id="usertype">
                            <option value="employee">employee</option>
                            <option value="admin">admin</option>
                        </select>
                        <input type="text" placeholder="Username" name="username" required>
                        <input type="text" placeholder="Enter Email" name="email" id="email" required>
                        <input type="password" placeholder="Enter Password" name="password" id="psw" required>
                       <br>

                        <button type="submit" name="register">REGISTER</button>
                    </form>
                </div>

                <div class="container signin">
                    <p class="text-muted">Already have an account? <a href="login.php">Signin</a>.</p>
                </div>


            </div>
        </div>
    </div>
    </div>



    </div>


    </div>
</body>

</html>