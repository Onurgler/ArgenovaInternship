<?php
session_start();
include '../connection.php';
$user = $_SESSION['username'];

$blogid = $_POST['blogid'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = date('Y-m-d H:i:s');

$sql = "insert into blogcomment(Coid,BlogId,CoUser,CoEmail,CoDate,comment) values('','" . $blogid . "','" . $name . "','" . $email . "','" . $date . "','" . $message . "')";
$result = mysqli_query($connect, $sql);

if ($result) {
    $_SESSION['username']= $user;
    header("location:user-blog-details.php?id=".$blogid."");
    die;
} else {
    echo "Error:" . $sql;
}