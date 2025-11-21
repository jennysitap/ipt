<?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="ostec";
    $conexion=new mysqli($server,$user,$pass,$db);
    if($conexion->connect_error){
        die("no se puede conectar a mysql PRENDELO");
    }
?>

