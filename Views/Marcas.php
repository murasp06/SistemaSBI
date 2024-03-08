<?php include "../Templades/Headers.php" ?>

<!-- Listado de Marcas -->
<div class="container">
  <?php
  if ($_GET['id'] == 01) { //confirmacion de el registro
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Registro de Marca Exitosa!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  } elseif ($_GET['id'] == 02) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">No se pudo registrar la Marca!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  };
  ?>
  <div class="border border-dark">
    <!-- titulo del cuadro -->
    <div class="container border-bottom bg-dark border-dark d-flex justify-content-between ">
      <div class="">
        <h3 class="text-white">Marcas</h3>
      </div>
      <div class="p-2">

        <!-- Boton del modal -->
        <button type="button" class=" btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0" />
          </svg>
          Marcas
        </button>

        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Marcas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div style="background-color: #ff3333;" class="modal-body">
                <!-- formulario -->
                <form action="../Controller/con.insertmarcas.php" method="post">
                  <div>
                    <?php
                    //  include "../Model/conexion_bd.php";
                    include  "../Controller/funciones.php";
                    ?>
                    <div class=" mb-3 mx-1">
                      <select class="form-select" name="opc" aria-label="Default select example">
                        <option selected disabled>selecciona la Categoria</option>
                        <?php foreach ($consul_categorias as $categ) { ?>
                          <option value="<?php echo $categ->codex ?>"><?php echo $categ->categoria ?></option> <!-- el id de las categorias se edito a codex-->
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-floating mx-1">
                      <input type="text" class="form-control" id="2" name="marca" placeholder="Corona" required>
                      <label for="2">Nombre de la Marca</label>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Registrar">
              </div>
              </form>
              <!-- fin de formulario -->
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- barra buscador -->
    <div class="container m-2 d-flex justify-content-end">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <!-- tabla de Marcas -->
    <div class="container ">
      <div class="table-responsive-md">
        <table class="table table  table-striped border-dark table-responsive">
          <thead class="">
            <tr>
              <th style="color: #ff3333;" scope="col">Codx</th>
              <th style="color: #ff3333;" scope="col">Marca</th>
              <th style="color: #ff3333;" scope="col">Categoría</th>
              <!-- <th style="color: #ff3333;" scope="col">Estado</th> -->
              <!-- <th style="color: #ff3333;" scope="col" colspan="2">Accion</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            //  include "../Model/conexion_bd.php";
            // include  "../Controller/funciones.php";
            if ($consul_marcas >= 1) {

              foreach ($consul_marcas as $marcas) {


            ?>
                <tr>
                  <th style="color: #ff3333;" scope="row"><?php echo $marcas->codx ?></th>
                  <td><?php echo $marcas->marca ?></td>
                  <td><?php echo $marcas->categoria ?></td>

                  <!-- <td> <a href="##"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil-square text-info" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                      </svg></a>
                  </td>
                  <td>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash text-danger" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                      </svg></a>
                  </td> -->
                </tr>
            <?php }
            } else {
              echo "<tr><div class='alert alert-primary mt-5' role='alert'>
              No se han encontrado registros!
              </div></tr>";
            } $sql= null; $consul_marcas= null; $marcas;?>
          </tbody>
        </table>
      </div>
      <!-- paginacion -->
      <nav class=" d-flex justify-content-between mb-4" aria-label="Page navigation example">
        <div> <span>mostrando 15 de x Marcas</span> </div>
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
<!-- fin Marcas -->

<?php include "../Templades/Footers.php" ?>