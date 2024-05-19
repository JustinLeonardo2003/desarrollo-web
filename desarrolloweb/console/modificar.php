<?php
include "D:\Juegos\htdocs\desarrolloweb\console/conexion.php";
if (!isset($_GET["id"])) {
    die("No se proporcionó un ID.");
}

$Id = $_GET["id"];

$sql = $conexion->query("SELECT * FROM persona WHERE Id = $Id");

if ($sql === false) {
    die("Error en la consulta SQL: " . $conexion->error);
}
?>

<?php

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["Nombre"]) && !empty($_POST["Apellido"]) && !empty($_POST["Cedula"]) && !empty($_POST["Correo"]) && !empty($_POST["Telefono"]) && !empty($_POST["Rol"]) && !empty($_POST["Fecha"])) {
       
        $id = $_POST["Id"];
        $nombre = $_POST["Nombre"];
        $apellido = $_POST["Apellido"];
        $cedula = $_POST["Cedula"];
        $correo = $_POST["Correo"];
        $telefono = $_POST["Telefono"];
        $rol = $_POST["Rol"];
        $fecha = $_POST["Fecha"];

        
        $sql = $conexion->query("UPDATE persona SET Nombre='$nombre', Apellido='$apellido', Cedula=$cedula, Correo='$correo', Telefono=$telefono, Rol='$rol', Fecha='$fecha' WHERE Id=$id");

        if ($sql === true) {
            header("Location: /desarrolloweb/index.php"); 
            exit();
        } else {
            echo "<div class='alert alert-danger'> Error al modificar registro </div>";
        }
    } else {
        echo "<div class='alert alert-warning'> Campos Vacios </div>";
    }
}
?>
