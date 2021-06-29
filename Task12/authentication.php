<?php
session_start();
include('connection.php');
$username = $_POST['username'];
$password = $_POST['password'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($connect, $username);
$password = mysqli_real_escape_string($connect, $password);

$sql = "select *from login where username = '$username' and password = '$password'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    
    $_SESSION['username']= $username;
    header("location:panel/user-details.php");
    die;
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
