<?php
include("conexion.php");
$cone=conectar();

$id_producto=$_POST['id_producto'];
$nombre_p=$_POST['nombre_p'];
$categoria=$_POST['categoria'];
$marca=$_POST['marca'];
$precio=$_POST['precio'];


$consulta="UPDATE producto SET nombre_p='$nombre_p',categoria='$categoria',marca='$marca'
,precio='$precio' WHERE id_producto='$id_producto'";
$query= mysqli_query($cone,$consulta);

if($query){
    Header("Location: makeup.php");
    
}else {
}
?>