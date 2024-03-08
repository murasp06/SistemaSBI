<?php

require ("../Model/conexion_bd.php");

// consulta registros clientes
$sql=$con->prepare("SELECT * FROM Clientes LIMIT 15 ");
$sql->execute();
$consul_clientes=$sql->fetchAll(PDO::FETCH_OBJ);

// consulta registros de compra
// $sql=$con->prepare("SELECT * FROM Compras LIMIT 15 ");
// $sql->execute();
// $consul_compras=$sql->fetchAll(PDO::FETCH_OBJ);

// consulta registro de categorias
 $sql=$con->prepare("SELECT * FROM Categorias LIMIT 15 ");
 $sql->execute();
 $consul_categorias=$sql->fetchAll(PDO::FETCH_OBJ);

// Consulta Registros marcas
 $sql=$con->prepare("SELECT * FROM Marcas M INNER JOIN Categorias C on M.categoria = C.codex LIMIT 15 ");
 $sql->execute();
 $consul_marcas=$sql->fetchAll(PDO::FETCH_OBJ);

//consulta registro de proveedores
$sql=$con->prepare("SELECT * FROM Proveedores LIMIT 15 ");
 $sql->execute();
 $consul_proveedores=$sql->fetchAll(PDO::FETCH_OBJ);

 //consulta tabla clientes
 function consult_producto(){
     include "../Model/conexion_bd.php";
     $sql = $con->prepare("SELECT * FROM Productos;");
     $sql->execute();
     $consul_productos = $sql->fetchAll(PDO::FETCH_OBJ);
     return $consul_productos;
 };

 consult_producto();



//matamos todas las sentencias anteriores
// $sql= null;
// $consul_clientes=null;
// $consul_categorias=null;
// $consul_marcas=null;
// $consul_proveedores=null;
//-------------------------------------------------------//-----------------------------------------//------------
// if (isset($_POST['accion'])) {
//     switch ($_POST['accion']) {
//             //casos de Registros
//         case 'registrar_cliente':
//             registro_cliente();
//             break;
//     }
// }


// function registro_cliente()
// {
//     extract($_POST);
//     $sql = $con->prepare("INSERT INTO Clientes (nombre,direccion,movil,correo,documento) 
//         VALUES ('$nombre','$direccion','$movil','$correo','$documento')");
//     $sql->execute();
// }

// //consulta tabla clientes
// function consult_clientes()
// {
//     include "../Model/conexion_bd.php";
//     $sql = $con->prepare("SELECT * FROM Clientes;");
//     $sql->execute();
//     $consul_clientes = $sql->fetchAll(PDO::FETCH_OBJ);
// }


// function loguear()
// {
//     $user = $_POST['user'];
//     $pass = $_POST['clave'];
//     include "../Model/conexion_bd.php";
//     $sql = $con->prepare("SELECT * FROM usuarios WHERE usuario='$user' AND pass ='$pass' ");
//     $sql->execute();
//     $registros = $sql->fetchAll(PDO::FETCH_OBJ);
//     foreach ($registros as $dato);
//     if ($dato > 0 and $dato->activo == 1) {
//         session_start();
//         header("location: ../Views/stock.php");
//     } else {
//         echo "No se pudo iniciar la sesion";
//     }
// }
