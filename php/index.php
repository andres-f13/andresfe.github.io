<?php

// Archivo respuesta_json.php
// Le comunica al navegador que la respuesta será JSON
header('Content-Type: application/json; charset=UTF-8');

$respuesta = [
    'mensaje' => 'Hola mundo!'
];

echo json_encode($respuesta);

// No se cierra la "etiqueta" <?php ya que el archivo contiene solo código PHP