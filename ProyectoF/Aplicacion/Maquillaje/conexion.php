<?php
function conectar(){
    $server = "localhost2";
    $user = "root";
    $pass = "app";
    $db = "maquillaje";

    $cone = mysqli_connect($server,$user,$pass);
    mysqli_select_db($cone,$db);

    return $cone;
}
?>