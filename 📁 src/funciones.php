<?php
/**
 * Biblioteca de funciones reutilizables
 */

function formatearTexto($texto) {
    return ucwords(strtolower(trim($texto)));
}

function calcularTamano($valor) {
    return strlen($valor);
}

function validarDato($dato) {
    return !empty(trim($dato));
}
?>
