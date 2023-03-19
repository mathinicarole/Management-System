<?php
include('connection.php');

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
}

$sql = "INSERT INTO users (username, email, password,usertype) VALUES ('$username', '$email', '$password', '$usertype')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location: login.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>