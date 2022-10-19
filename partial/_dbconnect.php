<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "demo";

$conn = mysqli_connect($server,$user,$password,$database);

if(!$conn){
    die("Error". mysqli_connect_error());
}



?>