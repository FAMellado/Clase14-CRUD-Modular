<?php

include ("index2.php");

$id_recibido = $_POST["id"];
$nombre_recibido = $_POST["nombre"];
$origen_recibido = $_POST["origen"];
$logo_recibido = $_POST["logo"];

$update = "UPDATE marcas WHERE id=  SET nombre = '.$nombre_recibido.', origen = '.$origen_recibido.', logo='.$logo_recibido.' ;";
$resultado = mysqli_query($conexion, $update);

header("Location: index.php");

?>