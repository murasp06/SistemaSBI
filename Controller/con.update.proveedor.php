<?php

$id_client = $_GET['id'];

require ('../Model/conexion_bd.php');

$nombre = $_POST['nombre'];
$movil = $_POST['movil'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$documento = $_POST['documento'];
$balance = $_POST['balance'];
$estado = $_POST['estado'];

$sql = $con->prepare("UPDATE Clientes SET nombre='$nombre',movil='$movil',direccion='$direccion',correo='$correo',estado=$estado,balance=$balance WHERE Clientes.codx = '$id_client'");  
$sql->execute();
//echo "esta funcionando hast a aqui ->....";
if ($sql) {
    $sql = null;
    //echo '<div class="alert alert-success" role="alert"> Datos actualizados con exito!</div>';
    header("location: ../Views/Clientes.php");
} else {
    $sql = null;
    echo '<div class="alert alert-danger" role="alert"> No se hizo la actualizacion!</div>';
}

//cerrar la conexion a la bd.
//mysqli_close($con);