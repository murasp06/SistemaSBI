<?php include "../Templades/Headers.php"?>

<!-- Lista de Ordenes -->
<div class="container">
      <div class="border border-dark">
        <!-- titulo del cuadro -->
        <div class="container border-bottom bg-dark border-dark d-flex justify-content-between ">
          <div class="">
            <h3 class="text-white">Gestion de Ordenes</h3>
          </div>
          <div class="p-2">

            <!-- Boton del modal -->
            <button type="button" class=" btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5M11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118z"/>
              </svg>
              Ordenes
            </button>

            <!-- Modal -->
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Orden</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body bg-secondary-subtle">
                    <!-- formulario -->
                    <form action="#" method="post">
                      <div >

                        <div class=" mb-3 mx-1">
                          <select class="form-select" name="marca" aria-label="Default select example" required>
                            <option selected disabled>seleccionar Producto</option>
                            <option value="1">valdosa ciril</option>
                            <option value="2">pega cor</option>
                            <option value="3">...</option>
                          </select>
                        </div>
                        <div class="form-floating mb-3 mx-1">
                          <input type="number" class="form-control" id="2" name="cantidad" placeholder="01234564756789"
                            required>
                          <label for="2">Cantidad</label>
                        </div>
                        <div class=" mb-3 mx-1">
                          <select class="form-select" name="marca" aria-label="Default select example" required>
                            <option selected disabled>seleccionar Cliente</option>
                            <option value="1">Jose pilatos</option>
                            <option value="2">Tarantino quetaro</option>
                            <option value="3">...</option>
                          </select>
                        </div>
                      </div>
                  </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" value="Registrar">
                  <!-- <button type="" class="btn btn-primary">Registrar</button> -->
                </div>
                </form>
                <!-- fin de formulario -->
                </div>
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
      <!-- tabla de Ordenes -->
      <div class="container ">
        <div class="table-responsive-md">
          <table class="table table  table-striped border-dark table-responsive">
            <thead class="">
              <tr>
                <th style="color: #ff3333;" scope="col">Codx</th>
                <th style="color: #ff3333;" scope="col">Produto</th>
                <th style="color: #ff3333;" scope="col">Cantidad</th>
                <th style="color: #ff3333;" scope="col">Cliente</th>
                <th style="color: #ff3333;" scope="col">Modalidad</th>
                <th style="color: #ff3333;" scope="col" colspan="2">Accion</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th style="color: #ff3333;" scope="row">1</th>
                <td>Valdosa Ciril</td>
                <td>30</td>
                <td>Tarantino Quetaro</td>
                <td>presencial</td>
                <td> <a href="##"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                      class="bi bi-pencil-square text-info" viewBox="0 0 16 16">
                      <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                      <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                    </svg></a>
                </td>
                <td>
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                      class="bi bi-trash text-danger" viewBox="0 0 16 16">
                      <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                      <path
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                    </svg></a>
                </td>
              </tr>
              

            </tbody>
          </table>
        </div>
        <!-- paginacion -->
        <nav class=" d-flex justify-content-between mb-4" aria-label="Page navigation example">
          <div> <span>mostrando 15 de x Ord.</span> </div>
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
    <!-- fin Ordenes -->

<?php include "../Templades/Footers.php"?>