<?php
include "./conexion.php";
if (isset($_GET['id'])){
    $consulta="delete from restauracion where ID_producto=".$_GET['id'];
    $conexion->query($consulta) or die ($conexion->error);
    echo "Registro eliminado correctamente.";
}
header("Location: ../restauracion.php?status=3");
?>