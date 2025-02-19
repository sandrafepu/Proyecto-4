<?php
header('Content-Type: application/json');

// Comprobaciones
if (!file_exists("datos.json")) {
    echo json_encode(["error" => "El archivo datos.json no existe."]);
    exit;
}

$datos_json = file_get_contents("datos.json");

if (empty($datos)) {
    echo json_encode(["error" => "El archivo datos.json esta vacio."]);
    exit;
}

$datos_json = json_decode($datos,true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(["error" => "El archivo datos.json contiene un json invalido."]);
    exit;
}

echo json_encode($datos_json);
?>
