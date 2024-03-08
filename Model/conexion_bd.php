<?php

$servidor = "localhost"; //aqui va el ip o nombre del dominio
$bd = "Sistema_SBI"; //nombre de bases de datos
$usuario = "root"; //va el usuario para bd
$pass = ""; //clave para bd

try {
    $con = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $pass);
} catch (Exception $ex) {
    echo "error de conexion " . $ex->getMessage();
};
