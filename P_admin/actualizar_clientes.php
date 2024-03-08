<?php

include("../Templades/Headers.php");

$id_usuario = $_GET['id'];
// if ($_SESSION['admin'] == 1) { 

require('../Model/conexion_bd.php');
// para actualizaciones de datos del usuario desde con el rol del admid
$sql = $con->prepare("SELECT * FROM Clientes WHERE codx=$id_usuario");
$sql->execute();
$datosClient = $sql->fetchAll(PDO::FETCH_OBJ);   
//foreach ($queryresultado as $row):
foreach ($datosClient as $datos) {
?>
    <!-- <a class="btn btn-primary m-3" href="usuarios.php">Volver</a> -->
    <div class="container mt-5">
        <h3>Actualización de datos de cliente <strong style="color: red;"><?php echo $datos->documento ?></strong> </h3>
        <form action="../Controller/con.updateClient.php?id=<?php echo $datos->codx ?>" method="POST">
            <!-- <input type="hidden" class="form-control mb-1" name="codx" value="<?php //echo $datos->codx ?>"> -->
            <input type="text" class="form-control mb-1" name="nombre" placeholder="Nombre" value="<?php echo $datos->nombre; ?>">
            <input type="text" class="form-control mb-1" name="direccion" placeholder="Direccion" value="<?php echo $datos->direccion ?>">
            <input type="number" class="form-control mb-1" name="movil" placeholder="Movil" value="<?php echo $datos->movil?>">
            <input type="text" class="form-control mb-1" name="correo" placeholder="Correo" value="<?php echo $datos->correo?>">
            <input type="number" class="form-control mb-1" name="balance" placeholder="Balance" value="<?php echo $datos->balance?>">
            <input type="number" class="form-control mb-1" name="estado" placeholder="Estado" value="<?php echo $datos->estado ?>">
            <!-- <input type="text" class="form-control mb-1" name="ciudad" placeholder="Ciudad" value="<?php //echo $datos->ciudad ?>"> -->
            <input type="number" class="form-control mb-1" name="documento" placeholder="Documento" value="<?php echo $datos->documento ?>">

            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
        </form>
    <?php }
// para cerrar la conexion a la bd se asigna null a la variable que construye el pdo
    $sql=null;
    $con=null;
    include("../Templades/footers.php");
    ?>

   
    