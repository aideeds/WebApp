<?php
    include("conexion.php");
    $cone = conectar();

    $consulta = "SELECT * FROM producto";
    $query = mysqli_query($cone,$consulta);

    $info = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SALLY BEAUTY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, 
                                    user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body class="principal-2">
    <div class="center">
        <h1 class="Title2">
            REGISTRO SALLY BEAUTY
        </h1>
        <div class="Formato">
            <h1 class="info">
                Ingresa los datos
            </h1>

            <form action="insertar.php" method="POST">
                <input type="text" class="diseño-colu" name="id_producto" placeholder="ID"> </br>
                <input type="text" class="diseño-colu" name="nombre_p" placeholder="Nombre"> </br>
                <input type="text" class="diseño-colu" name="categoria" placeholder="Categoria"> </br>
                <input type="text" class="diseño-colu" name="marca" placeholder="Marca"> </br>
                <input type="text" class="diseño-colu" name="precio" placeholder="Precio"> </br>

                <input type="submit" class="boton_agregar" value="Agregar">
            </form>
        
        <div class="Tabla-principal">
            <table class="tabla">
                <head class="head-table">
                    <tr>
                        <th>
                            Id_Producto
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Categoria
                        </th>
                        <th>
                            Marca
                        </th>
                        <th>
                            Precio
                        </th>
                    </tr>
                </head>

                <tbody>
                    <h1>Registros</h1>
                        <?php
                            while($info=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                            <th><?php   echo $info['id_producto']?></th>
                            <th><?php   echo $info['nombre_p']?></th>
                            <th><?php   echo $info['categoria']?></th>
                            <th><?php   echo $info['marca']?></th>
                            <th><?php   echo $info['precio']?></th>
                            <th><a href="actualizar.php?id_producto=<?php echo $info['id_producto'] ?>" class="botonactualizar">Actualizar</a></th>
                            <th><a href="delete.php?id_producto=<?php echo $info['id_producto'] ?>" class="botoneliminar">Eliminar</a></th>
                            </tr>
                        <?php
                            }
                        ?>
                
                </tbody>
            </table>
        </div>
    </div>
    <footer class="foot">
    <a href="index.html" class="navegacion">Ir a la pagina de inicio</a>

    </footer>
</body>
</html>