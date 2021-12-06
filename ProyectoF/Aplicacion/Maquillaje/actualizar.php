<?php
include("conexion.php");
$cone=conectar();

$id_producto=$_GET['id_producto'];

$consulta="SELECT * FROM producto WHERE id_producto='$id_producto'";
$query= mysqli_query($cone,$consulta);

$datos=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <title>Actualizar</title>
</head>
<body>
    <div class="Registros">
        <form action="editar.php" method="POST">  
                <input type="hidden" name="id_producto" value="<?php echo $datos['id_producto']  ?>">
                                
                    <input type="text" class="" name="nombre_p" placeholder="Nombre" value="<?php echo $datos['nombre_p']  ?>">
                    <input type="text" class="" name="categoria" placeholder="Categoria" value="<?php echo $datos['categoria']  ?>">
                    <input type="text" class="" name="marca" placeholder="Marca" value="<?php echo $datos['marca']  ?>">
                    <input type="text" class="" name="precio" placeholder="Precio" value="<?php echo $datos['precio']  ?>">
                                
                <input type="submit" class="" value="Actualizar">
        </form>            
    </div>
</body>
</html>
