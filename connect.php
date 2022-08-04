<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'inventory';
$conn = new mysqli($host, $user, $pass, $db);


if(!$conn){
    die(mysqli_error($conn));
}



?>