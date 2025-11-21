<?php
include "./conexion.php";
if (isset($_GET['id'])){
    $consulta="delete from usuarios where ID_usuario=".$_GET['id'];
    $conexion->query($consulta) or die ($conexion->error);
    echo "Registro eliminado correctamente.";
}
header("Location: ../users.php?status=3");
?>