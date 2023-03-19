<?php
include("connection.php");
//include("function.php");

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