<?php
header('Content-Type: application/json');

// Comprobar si el archivo existe
if (!file_exists("datos.json")) {
    echo json_encode(["error" => "El archivo datos.json no existe."]);
    exit;
}

// Leer el contenido del archivo
$datos = file_get_contents("datos.json");

// Comprobar si el archivo está vacío
if (empty("$datos")) {
    echo json_encode(["error" => "El archivo datos.json esta vacio."]);
    exit;
}

// Intentar decodificar el JSON
$datos_json = json_decode($datos, true);

// Comprobar si el JSON es válido
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(["error" => "El archivo datos.json contiene un JSON invalido."]);
    exit;
}

// Si todo está bien, devolver los datos
echo json_encode($datos_json);
?>
