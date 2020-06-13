<?php

//creating a database connection
$hostname="localhost";
$username="root";
$password="";
$db="dufma";

$conn = mysqli_connect($hostname, $username, $password) or die("Error");
mysqli_select_db($conn, $db) or die("Error in selecting database");

if (mysqli_connect_errno()){
    echo "........".mysqli_connect_error();
   } 

?>