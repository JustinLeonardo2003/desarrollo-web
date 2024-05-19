<?php
if (!empty($_POST["btnregistrar"])) {

    if (!empty($_POST["Nombre"]) and !empty($_POST["Apellido"]) and !empty($_POST["Cedula"]) and !empty($_POST["Correo"]) and !empty($_POST["Telefono"]) and !empty($_POST["Rol"]) and !empty($_POST["Fecha"])) {

        $nombre = $_POST["Nombre"];
        $apellido = $_POST["Apellido"];
        $cedula = $_POST["Cedula"];
        $correo = $_POST["Correo"];
        $telefono = $_POST["Telefono"];
        $rol = $_POST["Rol"];
        $fecha = $_POST["Fecha"];

        
        include "D:\Juegos\htdocs\desarrolloweb\console/conexion.php";

        $sql = "INSERT INTO persona (Nombre, Apellido, Cedula, Correo, Telefono, Rol, Fecha) VALUES ('$nombre', '$apellido', '$cedula', '$correo', '$telefono', '$rol', '$fecha')";

        if ($conexion->query($sql) === TRUE) {
        } else {
            echo "Error al añadir persona: " . $conexion->error;
        }

        $conexion->close();
    } else {
        echo "Falta llenar algún campo.";
    }
}
?>
