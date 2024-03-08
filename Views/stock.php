<?php include "../Templades/Headers.php"; ?>
<!-- stock del inventario -->
<div class="container">
    <div class="border border-dark">
        <!-- titulo del cuadro -->
        <div class="container border-bottom bg-dark border-dark p-2">
            <h3 class="text-white">Stock del Inventario</h3>
        </div>
        <!-- barra buscador -->
        <div class="container m-2 d-flex justify-content-end">
            <form class="d-flex  " role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <!-- tabla de inventario -->
        <div class="container ">
            <div class="table-responsive-md">
                <table class="table table  table-striped border-dark table-responsive">
                    <thead class="">
                        <tr>
                            <th style="color: #ff3333;" scope="col">Codx</th>
                            <th style="color: #ff3333;" scope="col">Producto/código</th>
                            <th style="color: #ff3333;" scope="col">Invéntario Inicial</th>
                            <th style="color: #ff3333;" scope="col">Inventario Recibído</th>
                            <th style="color: #ff3333;" scope="col">Productos Vendidos</th>
                            <th style="color: #ff3333;" scope="col">Inventario Disponible</th>
                            <th style="color: #ff3333;" scope="col">Calidad</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        // include "../Model/conexion_bd.php";
                        include  "../Controller/funciones.php";
                        if ($consul_stock >= 1) {

                            foreach ($consul_stock as $stock) {


                        ?>
                                <tr>
                                    <th style="color: #ff3333;" scope="row"><?php echo $stock->codex ?></th>
                                    <td><?php echo $stock->productos ?><span class="badge rounded-pill text-bg-primary"><?php echo $stock->cod_modelo ?></span></td>
                                    <td><?php echo $stock->cant_inicial ?></td>
                                    <td><?php echo $stock->cant_recibida ?></td>
                                    <td><?php echo $stock->cant_vendida ?></td>
                                    <td><?php echo $stock->cant_disponible ?></td>
                                    <td><?php echo $stock->calidad ?></td>
                                </tr>
                        <?php }
                        } else {
                            echo "<tr><div class='alert alert-primary mt-5' role='alert'>
                            No se han encontrado registros!
                          </div></tr>";
                        } ?>
                        <!-- <tr>
                                    <th style="color: #ff3333;" scope="row">2</th>
                                    <td>Valdosa cian</td>
                                    <td>0</td>
                                    <td>80</td>
                                    <td>20</td>
                                    <td>60</td>
                                    <td>B</td>
                                </tr> -->

                    </tbody>
                </table>
            </div>
            <!-- paginacion -->
            <nav class=" d-flex justify-content-between mb-4" aria-label="Page navigation example">
                <div> <span>mostrando 15 de x en stock</span> </div>
                <ul class="pagination ">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>


    </div>
</div>
<!-- fin stock -->


<?php include "../Templades/Footers.php" ?>