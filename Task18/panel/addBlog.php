<?php
session_start();
include '../connection.php';
$user = $_SESSION['username'];
$title = $_POST['title'];
$date = date('Y-m-d H:i');
$kind = $_POST['kind'];
$details = $_POST['details'];
$seotitle = $_POST['seotitle'];
$seodesc = $_POST['seodesc'];
$seokey = $_POST['seokey'];

$sql = "insert into blog(id,user,title,date,kind,details,seotitle,seodesc,seokey) values('','" . $user . "','" . $title . "','" . $date . "','" . $kind . "','" . $details . "','". $seotitle ."','". $seodesc ."','". $seokey ."')";
$result = mysqli_query($connect, $sql);

if ($result) {
    $_SESSION['username']= $user;
    header("location:user-blog.php");
    die;
} else {
    echo "Error:" . $sql;
}
