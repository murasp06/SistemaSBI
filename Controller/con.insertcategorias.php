<?php

$categoria = $_POST['categoria'];

require '../Model/conexion_bd.php';

$sql = $con->prepare("INSERT INTO `Categorias`(`codex`, `categoria`, `estado`, `fechaHora`) VALUES (default,'$categoria',default,default)");
$sql->execute();
//echo"aqui";

if ($sql) {
    header("location: ../Views/Categorias.php?id=01");
} else {
    header("location: ../Views/Categorias.php?id=02");
}
//cerrar la conexion a la bd.
// para cerrar la conexion a la bd se asigna null a la variable que construye el pdo
$sql = null;
