<?php session_start();
if(!isset($_SESSION['user_data'])){
    header("Location: ../login.php");
}
$user_data=$_SESSION['user_data'];
?>
<?php
include "./php/conexion.php";
$sql="select * from restauracion order by ID_producto DESC";
$res=$conexion->query($sql) or die($conexion->error);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OSTEC Restauracion">
    <title>Ostec Arquitectos</title>
    <link rel="icon" href="./img/logo.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
</head>
<body class="d-flex">
    <!-- SIDEBAR -->
    <?php include "./layouts/aside.php";?>
    <!-- END SIDEBAR -->
    <!-- MAIN CONTENT -->
    <main class="flex-grow-1">
    <?php include "./layouts/header.php";?>

        <section class="container mt-4 p-4">
            <!-- TITLE SECTION -->
            <div class="d-flex justify-content-between">
                <h4>Restauración</h4>
                <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #716969;">
                    <i class="bi bi-hammer"></i> Agregar
                </button>
            </div>
            <!-- TITLE SECTION -->
            
            <!-- DATA TABLE -->
            <div class="row p-4 mt-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                         while($fila= mysqli_fetch_array($res)){
                        ?>
                        <tr>
                            <td><?php echo $fila['ID_producto']?></td>
                            <td><?php echo $fila['Nombre']?></td>
                            <td><?php echo $fila['Marca']?></td>
                            <td><?php echo $fila['Descripcion']?></td>
                            <td><?php echo $fila['Cantidad']?></td>
                            <td><?php echo $fila['Precio']?></td>
                            <td>
                                <button  data-id="<?php echo $fila['ID_producto']?>" class="btnBorrar btn btn-outline-danger btn-sm mx-1">
                                    <i data-id="<?php echo $fila['ID_producto']?>" class="bi bi-trash"></i>
                                </button>
                                <button data-bs-toggle="modal" data-bs-target="#modalEdit"
                                data-n="<?php echo $fila['Nombre']?>"
                                data-m="<?php echo $fila['Marca']?>"
                                data-d="<?php echo $fila['Descripcion']?>"
                                data-p="<?php echo $fila['Precio']?>"
                                data-c="<?php echo $fila['Cantidad']?>"
                                class="btn btn-outline-warning btn-sm mx-1 btnEditar" data-id="<?php echo $fila['ID_producto']?>">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                        </tr>
                        <?php  }  ?>
                    </tbody>
                </table>
            </div>
            <!-- DATA TABLE END -->
        </section>
    </main>
    <!-- END MAIN CONTENT -->

    <!-- Modal -->
    <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="form" action="../admin/php/add-res.php" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="">Nombre</label>
                                <input name="a" name="txtNombre" required type="text" class="form-control" id="nombre" placeholder="Inserta el nombre">
                            </div>
                            <div class="col-6">
                                <label for="">Marca</label>
                                <input  name="b" name="txtMarca" required type="text" class="form-control" id="marca" placeholder="Inserta la marca">
                            </div>
                            <div class="col-12">
                                <label for="">Descripción</label>
                                <input name="c" name="txtDescripcion" required type="text" class="form-control" id="des" placeholder="Inserta la descripción">
                            </div>
                            <div class="col-6">
                                <label for="precio">Precio</label>
                                <input name="d" name="txtPrecio" required type="number" id="precio" class="form-control" placeholder="Precio">
                            </div>
                            <div class="col-6">
                                <label for="precio">Cantidad</label>
                                <input name="e" name="txtCantidad" required type="number" id="cantidad" class="form-control" placeholder="Cantidad">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn text-white" style="background-color: #BCABAE;" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn text-white" style="background-color: #716969;" id="btnGuardar">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
<div class="modal fade modal-lg" id="modalEdit" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="formEdit" action="../admin/php/res-update.php" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id" id="idEdit">
                        <div class="col-6">
                            <label for="">Nombre</label>
                            <input name="txtNombre" required type="text" class="form-control" id="nombreEdit" placeholder="Inserta el nombre">
                        </div>
                        <div class="col-6">
                            <label for="">Marca</label>
                            <input name="txtMarca" required type="text" class="form-control" id="marcaEdit" placeholder="Inserta la marca">
                        </div>
                        <div class="col-12">
                            <label for="">Descripción</label>
                            <input name="txtDescripcion" required type="text" class="form-control" id="desEdit" placeholder="Inserta la descripción">
                        </div>
                        <div class="col-6">
                            <label for="precio">Precio</label>
                            <input name="txtPrecio" required type="number" id="precioEdit" class="form-control" placeholder="Precio">
                        </div>
                        <div class="col-6">
                            <label for="cantidad">Cantidad</label>
                            <input name="txtCantidad" required type="number" id="cantidadEdit" class="form-control" placeholder="Cantidad">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: #BCABAE;" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn text-white" style="background-color: #716969;" id="btnGuardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/restauracion.js"></script>
    <?php
    if(isset($_GET['status'])){
        $message="";
        if($_GET['status']==1){
            $message="Registro insertado correctamente";
        }else if($_GET['status']==2){
            $message="Registro actualizado correctamente";
        }else if($_GET['status']==3){
            $message="Registro eliminado correctamente";
        }
        ?>
        <script>
            Swal.fire({
            position: "center",
            icon: "success",
            title: "<?php echo $message?>",
            showConfirmButton: false,
            timer: 1500
        });
        </script>
        <?php
    }
    ?>

    <script>
        document.getElementById('btnGuardar').addEventListener('click', function() {
            const nombre = document.getElementById('nombre').value;
            const marca = document.getElementById('marca').value;
            const des = document.getElementById('des').value;
            const precio = document.getElementById('precio').value;
            const cantidad = document.getElementById('cantidad').value;

            // Validacion

            if (!nombre || !marca || !des || !precio || !cantidad ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Campos vacíos',
                    text: 'Por favor, llena todos los campos.'
                });
                return;
            }

            Swal.fire({
                icon: 'success',
                title: 'Producto Agregado',
                text: 'Fue agregado correctamente.'
            }).then(() => {
                
                document.getElementById('form').reset();
                $('#exampleModal').modal('hide');
            });
        });
    </script>
</body>
</html>

