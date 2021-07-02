<?php

include '../connection.php';

$id = $_POST['string'];

$sql = "delete from login where id='$id'";
$result = mysqli_query($connect, $sql);

if ($result) {
    echo "<p class='btn btn-info' align='center'>Record deleted successfully</p>";
} else {
    echo "Error:" . $sql;
}
$connect->close();
