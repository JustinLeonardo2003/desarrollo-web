<?php
$conexion = new mysqli("localhost", "root", "", "registro", "3307");
$conexion->set_charset("utf8");

// Verificar si la conexión se estableció correctamente
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    
}
?>
