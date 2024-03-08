<?php

echo $proveedor,$nit,$movil,$correo,$direccion;
$proveedor = $_POST['proveedor'];
$nit = $_POST['nit'];
$movil = $_POST['movil'];
$correo = $_POST['correo'];
$direccion= $_POST['direccion'];

require '../Model/conexion_bd.php';
$sql = $con->prepare("INSERT INTO `Proveedores`(`codx`, `proveedor`, `nit`, `movil`, `correo`, `direccion`, `estado`, `fechaHora`) 
VALUES (default,'$proveedor','$nit','$movil','$correo','$direccion',default,default)");
$sql->execute();
//echo"aqui";

if ($sql) {
    header("location: ../Views/Proveedores.php?id=01");
} else {
    header("location: ../Views/Proveedores.php?id=02");
}
//cerrar la conexion a la bd.
// para cerrar la conexion a la bd se asigna null a la variable que construye el pdo
$sql = null;