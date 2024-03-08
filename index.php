<!-- la pg principal sera la del formulario de logueo -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <main class="form-signin w-100  text-center  m-auto my-auto lg-p-5 ">
        <div>
            <?php
            if ($_GET['auth'] == 01) { //confirmacion de el registro
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Usuario o contraseña incorrectos! 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            } elseif ($_GET['auth'] == 02) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Ingreso Denegado!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>';
            }elseif ($_GET['auth'] == 03) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Usuario no registrado!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>';
            };
            ?>
        </div>
        <div class="mx-auto p-2 mt-3" style="width: 100%;">

            <form action="Controller/con.login.php" class="col-md-4 p-lg-5 mx-auto p-5  " method="post">
                <!-- <a href="#">
            <img style="border-radius: 50px 0px 45px 50px;" src=""
            alt="SBI" width="92" height="87">
        </a> -->
                <h1 style="color: #ff3333;" class=" fs-1 h3 mb-3 fw-bold p-lg-4">Sistema SBI</h1>

                <div class="form-floating mb-3">
                    <input type="numb" class="form-control border-dark" id="floating" name="user" placeholder="name.veras" required>
                    <label for="floating">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                        </svg>
                        Usuario
                    </label>
                </div>
                <div class="form-floating my-3">
                    <input type="password" class="form-control border-dark" id="floatingPassword" name="clave" placeholder="Password" required>
                    <label for="floatingPassword">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                            <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        Contraseña
                    </label>
                </div>
                <button class="btn btn-primary" type="submit">Iniciar Sesion</button>


                <!-- <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
            </div> -->
                <input type="hidden" name="loguear" class="btn  w-120 py-2 mb-3 btn-outline-danger fs-4 fw-bold" value="Iniciar">
                <!-- <a href="">recuperar contraseña</a> <span>o</span> <a href="records.php">Crear cuenta</a> -->
            </form>
        </div>

        <div class="container mt-5">
            <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Murasp06</span>
                </div>

            </footer>
        </div>


        <!-- script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </main>

</body>

</html>