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
    <meta name="description" content="OSTEC Agregar Proyectos">
    <title>Ostec Arquitectos</title>
    <link rel="icon" href="./img/logo.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="d-flex">
    <!--SIDEBAR-->
    <?php include "./layouts/aside.php";?>
    <!--MAIN CONTENT-->
    <main class="flex-grow-1">
        <section class="container mt-4 p-4">
            <!--TITLE SECTION-->
            <div class="d-flex justify-content-between">
                <h4>Agregar Proyecto</h4>
                <a class="btn text-white" style="background-color: #2D2E2E;" href="./proyectos.php">
                    <i class="bi bi-arrow-90deg-left"></i>
                    Volver</a>
            </div>
            <!--TITLE SECTION-->
            <!--DATA-->
            <div class="row px-4 mt-4">
                <div class="col-3">
                    <label for="nombre">Nombre</label>
                    <input required type="text" id="nombre" class="form-control" placeholder="Inserta el nombre">
                </div>
                <div class="col-3">
                    <label for="responsable">Responsable</label>
                    <input required type="text" id="responsable" class="form-control" placeholder="Inserta el responsable">
                </div>
                <div class="col-3">
                    <label for="descripcion">Descripción</label>
                    <input required type="text" id="descripcion" class="form-control" placeholder="Inserta la descripcion">
                </div>
                <div class="col-3">
                    <label for="imagen">Imagen</label>
                    <input accept="image/*" required type="file" id="imagen" class="form-control">
                </div>
                <div class="col-6">
                    <label for="precio">Precio</label>
                    <input required type="number" id="precio" class="form-control" placeholder="Precio Total">
                </div>
                <div class="col-6">
                    <label for="categoria">Categoría</label>
                    <select id="categoria" class="form-control">
                        <option value="1">Comercial</option>
                        <option value="2">Industrial</option>
                        <option value="3">Recreativo</option>
                        <option value="4">Cultural</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="tipo-servicio">Tipo de Servicio</label>
                    <select id="tipo-servicio" class="form-control">
                        <option value="1">Consultoría y asesoramiento</option>
                        <option value="2">Diseño arquitectónico</option>
                        <option value="3">Planificación y gestión de proyectos</option>
                        <option value="4">Elaboración de planos y documentos técnicos</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="estado">Estado</label>
                    <select id="estado" class="form-control">
                        <option value="1">Finalizado</option>
                        <option value="2">Inicio</option>
                        <option value="3">Planificación</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="fecha-inicio">Fecha de Inicio</label>
                    <input required type="date" id="fecha-inicio" class="form-control">
                </div>
                <div class="col-12">
                    <label for="fecha-finalizacion">Fecha de Finalización</label>
                    <input required type="date" id="fecha-finalizacion" class="form-control">
                </div>
                <div class="col-12 d-flex justify-content-center mt-4">
                    <button type="button" id="guardar" class="btn text-white" style="background-color: #716969;">
                        <i class="bi bi-download"></i>
                        Guardar</button>
                </div>
            </div>
        </section>
    </main>

    <!--JS-->
    <script>
        document.getElementById('guardar').addEventListener('click', function() {
            const nombre = document.getElementById('nombre').value;
            const responsable = document.getElementById('responsable').value;
            const descripcion = document.getElementById('descripcion').value;
            const imagen = document.getElementById('imagen').value;
            const precio = document.getElementById('precio').value;
            const categoria = document.getElementById('categoria').value;
            const tipoServicio = document.getElementById('tipo-servicio').value;
            const estado = document.getElementById('estado').value;
            const fechaInicio = document.getElementById('fecha-inicio').value;
            const fechaFinalizacion = document.getElementById('fecha-finalizacion').value;

            if (!nombre || !responsable || !descripcion || !imagen || !precio || !categoria || !tipoServicio || !estado || !fechaInicio || !fechaFinalizacion) {
                
                Swal.fire({
                    icon: 'error',
                    title: '¡Oops!',
                    text: 'Todos los campos son requeridos. Por favor, completa todos los campos.',
                    confirmButtonText: 'Aceptar'
                });
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Datos guardados',
                    text: 'El proyecto se ha guardado correctamente.',
                    confirmButtonText: 'Aceptar'
                });
                
            }
        });
    </script>
</body>
</html>

