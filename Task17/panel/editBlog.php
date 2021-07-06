<?php
session_start();
include '../connection.php';
$user = $_SESSION['username'];
$id = $_POST['user'];
$title = $_POST['title'];
$date = date('Y-m-d H:i');
$kind = $_POST['kind'];
$details = $_POST['details'];

$sql = "UPDATE blog SET title = '". $title ."', date = '". $date ."', kind = '". $kind ."', details = '". $details ."' WHERE id = ". $id ."";
$result = mysqli_query($connect, $sql);

if ($result) {
    $_SESSION['username']= $user;
    header("location:user-blog-details.php?id=".$id);
    die;
} else {
    echo "Error:" . $sql;
}
