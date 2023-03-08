<?php
session_start();
include("connection.php");
include("function.php");



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
        <form action="" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <form onsubmit="event.preventDefault()" class="box">
                            </form>
                        </div>

                        <h1>Register</h1>
                        <form action="#" method="POST">

                          
                           <div class="row">
                                <div class="form-group col">
                                    <p class="text-muted">Type</p>
                                    <select name="type" class="form-control" required>
                                        <option value="">Select One type</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>


                                    </select>
                                </div>
                            </div>
                            <input type="text" placeholder="Enter Email" name="email" id="email" required>
                            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

                            
                            <input type="submit" name="" value="Register" href="login.php">
                    </div>

                    <div class="container signin">
                        <p  class="text-muted">Already have an account? <a href="login.php">Signin</a>.</p>
                    </div>
        </form>

       
    </div>
    </div>
    </div>
    </div>



    </div>


    </div>
</body>

</html>