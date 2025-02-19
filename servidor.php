<?php
header('Content-Type: application/json');
$datos = file_get_contents("datos.json");
echo $datos;
?>
