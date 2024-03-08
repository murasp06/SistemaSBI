<?php

require "../Model/conexion_bd.php";

//recibimos los datos del formulario (login)
$user = $_POST['user'];  //dato de usuario
$pass = $_POST['clave']; //dato de contraseña

//consultamos la base de datos
$sql = $con->prepare("SELECT * FROM `usuarios` WHERE `usuario` = '$user' AND `pass` ='$pass' ");
$sql->execute();
$registros = $sql->fetchAll(PDO::FETCH_OBJ);

if ($registros >= 1) {
    foreach ($registros as $dato); //le damos un sobre nombre a la variable que contien la consulta
    if ($dato->usuario == $user and $dato->pass == $pass and $dato->activo == 1) { //se compara los usuarios ingresados y el activo con la bd
        session_start();
        $_SESSION['id'] = $dato->Id;

        header("location: ../Views/stock.php");
    } elseif ($dato->usuario == $user and $dato->pass == $pass and $dato->activo == 0) {
        header("location: ../index.php?auth=02");//el auth viene de: autenticacion de usuario
    } else {
        header("location: ../index.php?auth=01");
    };
} else {
    header("location: ../index.php?auth=03");
}

// foreach ($registros as $dato);
// //$rol=$dato->id_rol;
// if($dato->id_rol == 5 AND $dato->activo == 1 ) {    
//   session_start();
//   $_SESSION['id']=$dato->id_usuario;
//   $_SESSION['usuario']=$dato->nombre." ".$dato->apellidos;
//   header("location: ../Views/User.php"); 
