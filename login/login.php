<?php
include("connection.php");
//include("function.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login_style.css">
    <link rel="shortcut icon" type="image/jpg" href="/ALPHA_TECH/images/logo-small.ico" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">

</head>

<body>
    <div class="box">
        <form action="function.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                       
                        <h1>LOGIN</h1>
                        <p class="text-muted"> Start session!</p>
                        <form action="#" method="POST">

                            <input type="text" name="username" placeholder="User Type!!">
                            <input type="password" name="password" placeholder="Password!">

                            <button type="submit" class="btn" name="loginuser">Login</button>
                           
                    </div>
                    
                    <div class="container signin">
                        <p class="text-muted">Don't have an account?<a href="register.php">Signup</a>.</p>
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