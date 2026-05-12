<?php
/**
 * Módulo de procesamiento principal
 * Lógica de negocio del sistema
 */

// Cargar gestión de datos
include 'datos.php';

// Función principal del sistema
function procesarInformacion($listaDatos) {
    $resultadoFinal = [];
    foreach ($listaDatos as $elemento) {
        // Lógica de transformación
        $procesado = strtoupper(trim($elemento));
        $resultadoFinal[] = [
            'original' => $elemento,
            'procesado' => $procesado,
            'longitud' => strlen($procesado)
        ];
    }
    return $resultadoFinal;
}

// Obtener datos y ejecutar
$datosEntrada = obtenerDatos();
$datosSalida = procesarInformacion($datosEntrada);

// Mostrar resultados
echo "<h3>📋 Resultado del Procesamiento:</h3>";
echo "<pre>";
print_r($datosSalida);
echo "</pre>";

echo "<p>✅ Procesamiento completado correctamente</p>";
?>
