<?php
    session_start();
    $usuario=$_SESSION["user"];

    if(!$usuario){

        header("location: ./login.php");
        exit();

    }
    include ("connectDB.php");
?>