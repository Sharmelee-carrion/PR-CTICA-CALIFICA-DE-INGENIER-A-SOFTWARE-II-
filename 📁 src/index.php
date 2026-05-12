<?php
/**
 * Proyecto: Carroña de Sharmelee
 * Archivo principal de entrada
 * Desarrollado totalmente en PHP
 * Fecha: 11 de mayo de 2026
 */

// Cargar archivos de configuración y funciones
require_once 'configuracion.php';
require_once 'funciones.php';

// Cabecera del sistema
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Carroña de Sharmelee</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f5f5f5; }
        .contenedor { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
    </style>
</head>
<body>
<div class='contenedor'>
    <h1>🚀 Carroña de Sharmelee</h1>
    <p>Sistema desarrollado íntegramente en PHP | Versión 1.0</p>
    <hr>";

// Ejecutar procesamiento principal
include 'procesar.php';

echo "</div></body></html>";
?>
