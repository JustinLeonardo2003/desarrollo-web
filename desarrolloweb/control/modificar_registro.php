<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: auto;
            margin-top: 50px;
        }
    </style>
</head>
<body>
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

    <form class="form-container col-4" method="POST">
        <h1 class="text-center p-3">MODIFICAR REGISTRO</h1>
        <input type="hidden" name="Id" value="<?= $_GET["id"] ?>">

        <?php
        include "D:\Juegos\htdocs\desarrolloweb\console/modificar.php";

        while ($datos = $sql->fetch_object()) {
        ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="Nombre" value="<?= $datos->Nombre?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="Apellido" value="<?= $datos->Apellido?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cedula</label>
            <input type="text" class="form-control" name="Cedula" value="<?= $datos->Cedula?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Correo</label>
            <input type="text" class="form-control" name="Correo" value="<?= $datos->Correo?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="Telefono" value="<?= $datos->Telefono?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Rol</label>
            <input type="text" class="form-control" name="Rol" value="<?= $datos->Rol?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="Fecha" value="<?= $datos->Fecha?>">
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">MODIFICAR REGISTRO</button>
    </form>
    
</body>
</html>





