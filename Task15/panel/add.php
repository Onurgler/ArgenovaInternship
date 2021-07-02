<?php

include '../connection.php';

$newuser = $_POST['newuser'];
$newpass = $_POST['newpass'];

if (strcmp($newuser, "") && strcmp($newpass, "")) {
    $sql = "insert into login(id,username,password) values('','" . $newuser . "','" . $newpass . "')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<p class='btn btn-info' align='center'>New record created successfully</p>";
    } else {
        echo "Error:" . $sql;
    }
}

$connect->close();
?>