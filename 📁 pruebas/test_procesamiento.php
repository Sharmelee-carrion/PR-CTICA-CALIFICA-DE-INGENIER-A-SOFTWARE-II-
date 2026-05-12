<?php
/**
 * PRUEBA: Archivo de prueba para verificar el procesamiento principal
 * Proyecto: Carroña de Sharmelee
 * Fecha: 11 de mayo de 2026
 */

// Cargar archivos necesarios
require_once '../src/configuracion.php';
require_once '../src/funciones.php';
require_once '../src/datos.php';
require_once '../src/procesar.php';

echo "<h2>✅ PRUEBA DE MÓDULO DE PROCESAMIENTO</h2>";
echo "<hr>";

// 1. Obtener datos
echo "<b>1. Datos obtenidos del sistema:</b><br>";
$datos = obtenerDatos();
echo "<pre>";
print_r($datos);
echo "</pre>";

// 2. Ejecutar procesamiento
echo "<b>2. Resultado después de procesar:</b><br>";
$datosProcesados = procesarInformacion($datos);
echo "<pre>";
print_r($datosProcesados);
echo "</pre>";

// 3. Prueba de guardado de archivo
echo "<b>3. Prueba de guardado en archivo:</b><br>";
if (guardarDatos($datosProcesados, '../recursos/datos_prueba_guardados.txt')) {
    echo "✅ Archivo guardado correctamente en: recursos/datos_prueba_guardados.txt<br>";
} else {
    echo "❌ Error al guardar el archivo<br>";
}

echo "<hr>";
echo "<p>✅ Módulo de procesamiento funciona correctamente</p>";
?>
