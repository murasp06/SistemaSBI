<?php

$nombre = $_POST['nombre'];
$movil = $_POST['movil'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$documento = $_POST['documento'];
$balance = $_POST['balance'];

if(isset($nombre) AND isset($movil) AND isset($direccion) AND isset($correo) AND isset($documento) AND isset($balance)){

    require('../Model/conexion_bd.php');
    $sql = $con->prepare("INSERT INTO Clientes (codx, nombre, direccion, movil, correo, balance, estado, fechaHora, documento) 
VALUES (default,'$nombre','$direccion','$movil','$correo','$balance',default,default,'$documento')");
$sql->execute();
//echo"aqui";

if ($sql) {
    header("location: ../Views/Clientes.php?id=01");
} else {
    header("location: ../Views/Clientes.php?id=02");    
}
//cerrar la conexion a la bd.
// para cerrar la conexion a la bd se asigna null a la variable que construye el pdo
$sql=null;
}



