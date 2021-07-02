<?php

$username="root";
$password="root";
$sunucu="localhost";
$database="argenova";

$connect=mysqli_connect($sunucu,$username,$password,$database);

if($connect->connect_error) {  
    die("Failed to connect with MySQL: ". $connect->connect_error);  
}  

/*
$query="SELECT * FROM login";
$result=mysqli_query($connect,$query);
if($row= mysqli_fetch_array($result)){
    echo "Connect success";
}
*/
?>