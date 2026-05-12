<?php
/**
 * Gestión de datos del sistema
 */

function obtenerDatos() {
    return [
        "sharmelee",
        "carroña",
        "proyecto php",
        "sistema de procesamiento",
        "desarrollo completo"
    ];
}

function guardarDatos($datos, $archivo = '../recursos/datos_guardados.txt') {
    $contenido = print_r($datos, true);
    file_put_contents($archivo, $contenido);
    return true;
}
?>
