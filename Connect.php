<?php
$servername = "localhost";
$username ="Form";
$password = "123";
$dbname = "Form";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die ("connection failed: " . mysqli_connect_error());
}


?>