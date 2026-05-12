<?php
/**
 * Herramientas auxiliares
 */

function obtenerFechaActual() {
    return date('d/m/Y H:i:s');
}

function generarCodigoUnico() {
    return uniqid('cs_', true);
}
?>
