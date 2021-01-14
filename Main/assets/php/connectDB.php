<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "dswork";

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()){
    echo "Error";
    exit();
}

?>