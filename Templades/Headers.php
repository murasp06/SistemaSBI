<?php 
$Ruta ="../Views/" ; //ruta predestinada para evitar un bucle
session_start();
$varsesion = $_SESSION['id'];
if ($varsesion == null || $varsesion == '') { //se revisa que el id no este vacio para poder continuar
  //  echo 'usted no tiene autorizacion';
    header("location: ../index.php"); //se redirige al login 
    die();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema SBI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <!-- A.header donde esta el sbi -->
    <header style="background-color: #ff3333;" class=" py-3 mb-4 border-bottom">
        <div class="d-flex  justify-content-between">
            <div>
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <!-- sistema de Inventario Basico Sistematizado -->
                    <span class="fs-4 fw-bold text-white ">Sistema SBI</span>
                </a>
            </div>
            <div>
                <a class="me-4 text-white" href="../Controller/con.closed.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-power " viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1z" />
                        <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812" />
                    </svg></a>
            </div>
        </div>
    </header>

    <main>
        <div class="container mb-5">
            <!-- header -->
            <nav style="background-color: #ff3333;" class="navbar navbar-expand-lg ">
                <div class="container-fluid  ">
                    <!-- <a class="navbar-brand text-white" href="#">Navbar</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active text-white fw-semibold" aria-current="page" href="<?php echo $Ruta ?>stock.php">Inicio</a>
                            <a class="nav-link text-white fw-medium" href="<?php echo $Ruta ?>Clientes.php">Clientes</a>
                            <a class="nav-link text-white fw-medium" href="<?php echo $Ruta ?>Categorias.php">Categorías</a>
                            <a class="nav-link text-white fw-medium" href="<?php echo $Ruta ?>Marcas.php">Marcas</a>
                            <a class="nav-link text-white fw-medium" href="<?php echo $Ruta ?>Proveedores.php">Proveedores</a>
                            <a class="nav-link text-white fw-medium" href="<?php echo $Ruta ?>Productos.php">Prodúctos</a>
                            <a class="nav-link text-white fw-medium" href="<?php echo $Ruta ?>Compras.php">Comprás</a>
                            <a class="nav-link text-white fw-medium" href="<?php echo $Ruta ?>Ordenes.php">Ordénes</a>
                        </div>
                    </div>
                    <!-- boton de configuraciones -->
                    <div class="justify-content-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                            <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z" />
                        </svg>
                    </div>
                </div>
            </nav>
            <!-- fin header -->
        </div>