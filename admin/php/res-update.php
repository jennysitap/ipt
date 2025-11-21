<?php  
include "./conexion.php";
    $nombre = $_POST['txtNombre'];
    $marca = $_POST['txtMarca'];
    $descripcion = $_POST['txtDescripcion'];
    $precio = $_POST['txtPrecio'];
    $cantidad = $_POST['txtCantidad'];
    $id = $_POST['id'];

    $consulta="update restauracion set 
    Nombre='$nombre',
    Marca='$marca',
    Descripcion='$descripcion',
    Cantidad='$precio',
    Precio='$cantidad'
    where ID_producto = $id;";

$conexion->query($consulta) or die($conexion->error);
//echo "Dato actualizado corretamente"
header("location: ../../dashboard/restauracion.php?status=2");
?>