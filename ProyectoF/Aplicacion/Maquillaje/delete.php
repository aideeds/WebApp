<?php

include("conexion.php");
$cone=conectar();

$id_producto=$_GET['id_producto'];

$consulta="DELETE FROM producto WHERE id_producto='$id_producto'";
$query=mysqli_query($cone,$consulta);

    if($query){
        Header("Location: makeup.php");
    }
?>