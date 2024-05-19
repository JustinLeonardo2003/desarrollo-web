<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRU en PHP y MySQL</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

</head>
<body style="background-color: #f8f9fa; color: #212529;">
<?php
        include "D:\Juegos\htdocs\desarrolloweb\console/conexion.php";
        include "control/registro_persona.php";
    ?>
    <h1 class="text-center p-3">CRU en PHP y MySQL</h1>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST" style="background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h3 class="text-center p-3">Registro de Personas</h3>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="Apellido">
            </div>
            <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cedula</label>
    <input type="text" class="form-control" name="Cedula">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Correo</label>
    <input type="text" class="form-control" name="Correo">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="Telefono">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rol</label>
    <input type="text" class="form-control" name="Rol">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha</label>
    <input type="date" class="form-control" name="Fecha">
  </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Fecha</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "D:\Juegos\htdocs\desarrolloweb\console/conexion.php";
                        $sql = $conexion->query("SELECT * FROM persona");
                        while ($datos = $sql->fetch_object()) {
                    ?>
                    <tr>
                        <td><?= $datos->Id?></td>
                        <td><?= $datos->Nombre ?></td>
                        <td><?= $datos->Apellido ?></td>
                        <td><?= $datos->Cedula?></td>
                        <td><?= $datos->Correo ?></td>
                        <td><?= $datos->Telefono?></td>
                        <td><?= $datos->Rol ?></td>
                        <td><?= $datos->Fecha?></td>
                        <td>
                            <a href="http://localhost:50/desarrolloweb/control/modificar_registro.php?id=<?=$datos->Id?>"><i class="fas fa-pencil-alt"></i></a>
                            <a href="http://localhost:50/desarrolloweb/control/eliminar_registro.php?id=<?= $datos->Id ?>"> <i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
