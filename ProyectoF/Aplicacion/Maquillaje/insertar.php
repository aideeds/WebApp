<?php
include("conexion.php");
$cone=conectar();

$id_producto=$_POST['id_producto'];
$nombre_p=$_POST['nombre_p'];
$categoria=$_POST['categoria'];
$marca=$_POST['marca'];
$precio=$_POST['precio'];


$consulta="INSERT INTO producto VALUES('$id_producto','$nombre_p','$categoria','$marca','$precio')";
$query= mysqli_query($cone,$consulta);

if($query){
    Header("Location: makeup.php");
    
}else {
}
?>