<?php
session_start();

session_destroy();
header("location: ../index.php");




// $varsesion = $_SESSION['usuario'];
// $_GET['id'];
// if(isset($_GET['id'])){
//     session_destroy();
//     header("location: ../Views/login.php");

// }else
// if($varsesion == null || $varsesion == ''){
//     echo 'usted no tiene autorizacion';
//     die();
// }

// session_destroy();
// header("location: ../Views/login.php")
