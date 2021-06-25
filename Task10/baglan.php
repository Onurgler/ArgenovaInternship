<?php

$username="root";
$password="root";
$sunucu="localhost";
$database="argenova";

$connect=mysqli_connect($sunucu,$username,$password,$database);

$query="SELECT * FROM comment";
$result=mysqli_query($connect,$query);
while($row= mysqli_fetch_array($result)){
    echo $row["name"]; echo nl2br("\n");
    echo $row["email"]; echo nl2br("\n");
    echo $row["password"]; echo nl2br("\n");
    echo $row["phoneno"]; echo nl2br("\n");
    echo $row["gender"]; echo nl2br("\n");
    echo $row["message"]; echo nl2br("\n");
}

?>