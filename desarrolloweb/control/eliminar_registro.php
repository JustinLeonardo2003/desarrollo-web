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
if(isset($_GET['id'])) {
    
    $id = $_GET['id'];
    
    
    $sql = "DELETE FROM persona WHERE Id = $id";
    if ($conexion->query($sql) === TRUE) {
        
        header("Location: /desarrolloweb/index.php");
        exit();
    } else {
        
        echo "Error al eliminar el registro: " . $conexion->error;
    }
}
?>
