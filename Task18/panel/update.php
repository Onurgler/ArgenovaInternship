<?php

include '../connection.php';

$id = $_POST['string'];
$newuser = $_POST['newuser'];
$newpass = $_POST['newpass'];

$sql = "update login set username='$newuser',password='$newpass' where id='$id' ";
$result = mysqli_query($connect, $sql);
if ($result) {
    echo "<p class='btn btn-info' align='center'>Record update successfully</p>";
} else {
    echo "Error:" . $sql;
}

$connect->close();
