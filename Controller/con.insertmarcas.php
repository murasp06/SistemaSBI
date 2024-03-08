<?php

$marca = $_POST['marca'];
$categoria = $_POST['opc'];
require '../Model/conexion_bd.php';
$sql = $con->prepare("INSERT INTO `Marcas` (`codx`, `marca`, `categoria`, `estado`, `fechaHora`) VALUES (default,'$marca','$categoria',default,default);");
$sql->execute();
//echo"aqui";

if ($sql) {
    header("location: ../Views/Marcas.php?id=01");
} else {
    header("location: ../Views/Marcas.php?id=02");
}
//cerrar la conexion a la bd.
// para cerrar la conexion a la bd se asigna null a la variable que construye el pdo
$sql = null;