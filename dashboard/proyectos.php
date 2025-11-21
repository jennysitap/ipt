<?php session_start();
if(!isset($_SESSION['user_data'])){
    header("Location: ../login.php");
}
$user_data=$_SESSION['user_data'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OSTEC Info Proyectos">
    <title>Ostec Arquitectos</title>
    <link rel="icon" href="./img/logo.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
</head>
<body class="d-flex">
    <!--SIDEBAR-->
    <?php include "./layouts/aside.php";?>
    <!--END SIDEBAR-->
    <!--END MAIN CONTENT-->
    <main class="flex-grow-1">
    <?php include "./layouts/header.php";?>
            <section class="container mt-4 p-4">
                <!--TITLE SECTION-->
                <div class="d-flex justify-content-between">
                    <h4>Proyectos</h4>
                    <a class="btn btn-dark" href="./proyectos-add.php" style="background-color: #716969;">
                        <i class="bi bi-house-up-fill"></i>
                        Agregar</a>
                </div>
                <!--TITLE SECTION-->
                <!--DATA-->
                <div class="row px-4">
                    <div class="col-3 p-0 my-2 px-3">
                        <div class="card">
                            <img src="./img/OIP.jpg" style="height:200px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Cocina</h5>
                              <p class="card-text">Cocina con isla, hecha de madera.</p>
                              <a href="#"class="btn text-white" style="background-color: #716969;">Ver</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-3 p-0 my-2 px-3">
                        <div class="card">
                            <img src="./img/club-de-arquitectos-la_valenciana-portafolio-arquitecto-artigas-4-.png" style="height:200px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Fachada</h5>
                              <p class="card-text">Fachada de casa con vegetación.</p>
                              <a href="#" class="btn text-white" style="background-color: #716969;">Ver</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-3 p-0 my-2 px-3">
                        <div class="card">
                            <img src="./img/18.jpg" style="height:200px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Comedor</h5>
                              <p class="card-text">Amplio comedor para una empresa.</p>
                              <a href="#" class="btn text-white" style="background-color: #716969;">Ver</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-3 p-0 my-2 px-3">
                        <div class="card">
                            <img src="./img/17.jpg" style="height:200px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Capacitación</h5>
                              <p class="card-text">Cuarto de capacitación para el personal.</p>
                              <a href="#" class="btn text-white" style="background-color: #716969;">Ver</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-3 p-0 my-2 px-3">
                        <div class="card">
                            <img src="./img/2.jpg" style="height:200px;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Recepción</h5>
                              <p class="card-text">Recepción de un dermatólogo.</p>
                              <a href="#" class="btn text-white" style="background-color: #716969;">Ver</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--DATA-->
            </section>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/users.js"></script>
</body>
</html>