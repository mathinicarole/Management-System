<?php
include("connection.php");
include("function.php");


//will remove if necessary
$host = "localhost";
$username = "root";
$password = "";
$database = "login datab";

//create connection
$conn = mysqli_connect($host, $username, $password, $database);

//check connection
if (!$conn) {
    die("<script>alert('connection failed.')</script>");
}

session_start();
$_SESSION;
error_reporting(0);
//the connection
include 'connection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST")
//something was posted
{
    $username = $_POST["username"];
    $password = $_POST["password"];
}

$sql = "select * from users where username='" . $username . "' AND password='" . $password . "'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

if ($row["usertype"] == "employee") {
    $_SESSION["username"] = $username;
    header("location:employee_page.php");
} else if ($row["usertype"] == "admin") {
    $_SESSION["username"] = $username;
    header("location:admin_page.php");
}

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
                        <h1>LOGIN</h1>
                        <p class="text-muted"> Start session!</p>
                        <form action="#" method="POST">

                            <input type="text" name="username" placeholder="User Type!!">
                            <input type="password" name="password" placeholder="Password!">
                            <input type="submit" name="" value="Login" href="#">
                           
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