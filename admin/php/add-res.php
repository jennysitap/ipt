<?php 
include "./conexion.php";
 
    $nombre = $_POST ['a'];
    $marca = $_POST ['b'];
    $desc = $_POST ['c'];
    $cantidad = $_POST ['d'];
    $precio = $_POST ['e'];

    $consulta="INSERT INTO restauracion (Nombre, Marca, Descripcion, Cantidad, Precio) 
    VALUES ('$nombre', '$marca', '$desc', '$cantidad', '$precio');";

    $conexion->query($consulta) or die($conexion->error);
     echo "Registro insertado correctamente";
     
     header ("location: ../../dashboard/restauracion.php?status=1");

?>