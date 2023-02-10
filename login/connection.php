<?php
$host="localhost";
$username="root";
$password="";
$database="login datab";//users

//create connection
$conn=mysqli_connect($host,$username,$password,$database);

//check connection
if(!$conn){
    die("alert('connection failed.')");
}

?>
