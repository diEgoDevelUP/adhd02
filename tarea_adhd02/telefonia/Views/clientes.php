<!doctype html>
<html lang="es">

<head>
<style>
   body {
        background: linear-gradient(to left, skyblue, gray);
    }
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="<?php echo base_url('lineas'); ?>"><button type="button" class="btn btn-primary">Ver pagina de lineas
            telefonicas</button></a>
    <a href="<?php echo base_url('planes'); ?>"><button type="button" class="btn btn-primary">Ver pagina
            planes</button></a>
    <h1>Clientes</h1>
    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>Cliente ID</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Correo electronico</th>
                <th>Calle/Avenida</th>
                <th>No. casa</th>
                <th>Zona</th>
            </tr>
        </thead>
        <tbody>
            <?php
          foreach($datos as $cliente):
        ?>
            <tr>
                <td><?=$cliente['cliente_id'];?></td>
                <td><?=$cliente['apellido'];?></td>
                <td><?=$cliente['nombre'];?></td>
                <td><?=$cliente['correo_electronico'];?></td>
                <td><?=$cliente['calle_avenida'];?></td>
                <td><?=$cliente['no_casa'];?></td>
                <td><?=$cliente['zona'];?></td>
            </tr>
            <?php
          endforeach;
        ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>