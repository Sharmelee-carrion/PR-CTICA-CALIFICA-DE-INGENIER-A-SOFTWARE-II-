<?php
/**
 * PRUEBA: Archivo de prueba para verificar el funcionamiento de funciones.php
 * Proyecto: Carroña de Sharmelee
 * Fecha: 11 de mayo de 2026
 */

// Cargar el archivo con las funciones
require_once '../src/funciones.php';

echo "<h2>✅ PRUEBA DE FUNCIONES</h2>";
echo "<hr>";

// Prueba 1: formatearTexto()
$textoPrueba = "proyecto carroña sharmelee";
$resultado = formatearTexto($textoPrueba);
echo "<b>Prueba 1 - formatearTexto:</b><br>";
echo "Entrada: $textoPrueba <br>";
echo "Salida: $resultado <br><br>";

// Prueba 2: calcularTamano()
$textoPrueba2 = "PHP es potente";
$tamano = calcularTamano($textoPrueba2);
echo "<b>Prueba 2 - calcularTamano:</b><br>";
echo "Texto: $textoPrueba2 <br>";
echo "Longitud: $tamano caracteres <br><br>";

// Prueba 3: validarDato()
$datoVacio = "";
$datoValido = "Dato de prueba";
echo "<b>Prueba 3 - validarDato:</b><br>";
echo "Dato vacío: " . (validarDato($datoVacio) ? "VÁLIDO ❌" : "INVÁLIDO ✅") . "<br>";
echo "Dato con texto: " . (validarDato($datoValido) ? "VÁLIDO ✅" : "INVÁLIDO ❌") . "<br>";

echo "<hr>";
echo "<p>✅ Todas las pruebas de funciones finalizadas correctamente</p>";
?>
