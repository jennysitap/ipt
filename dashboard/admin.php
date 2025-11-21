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
    <meta name="description" content="OSTEC Administrador">
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
                <h4>Hoy es un buen día</h4>
                <!--STATS-->
                <div class="row">
                    <div class="col-3">
                        <div class="card" style="height:100px;">
                            <div class="card-body">
                                <label for="">
                                    <i class="bi bi-cash-stack"></i>
                                    Total Ingresos Mensuales
                                </label>
                                <h5 class="h2">$20,500.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="height:100px;">
                            <div class="card-body">
                                <label for="">
                                    <i class="bi bi-person-raised-hand"></i>
                                    Usuarios Activos
                                </label>
                                <h5 class="h2">150</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="height:100px;">
                            <div class="card-body">
                                <label for="">
                                    <i class="bi bi-cash-coin"></i>
                                    Usuarios por Pagar
                                </label>
                                <h5 class="h2">500</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="height:100px;">
                            <div class="card-body">
                                <label for="">
                                    <i class="bi bi-cone-striped"></i>
                                    Proyectos Realizados
                                </label>
                                <h5 class="h2">2,500</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--STATS-->
                <!--CHARTS-->
                <div class="row mt-4">
                    <div class="col-6">
                    <div class="card" style="height: 350px;">
                        <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
                            Ingresos por Mes
                        </div>
                        <div class="card-body">
                            <canvas id="chartIngresos"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="height: 350px;">
                        <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
                            Por Categoría
                        </div>
                        <div class="card-body" style="height:300px; width:500px; display: flex; justify-content: center; align-items: center;">
                            <canvas id="chartCategorias"></canvas>
                        </div>
                    </div>
                </div>
                </div>
                

                <!--CHARTS-->
            </section>
        </main>
    <!--END MAIN CONTENT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>