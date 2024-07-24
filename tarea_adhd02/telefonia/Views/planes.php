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
    <title>Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="<?php echo base_url('cliente'); ?>"><button type="button" class="btn btn-primary">Ver pagina clientes
        </button></a>
    <a href="<?php echo base_url('lineas'); ?>"><button type="button" class="btn btn-primary">Ver pagina
            lineas telefonicas</button></a>
    <h1>Planes</h1>
    <table class=" table table-striped table-border">
        <thead>
            <tr>
                <th>Plan Id</th>
                <th>Nombre del plan</th>
                <th>Pago mensual</th>
                <th>Cantidad de minutos</th>
                <th>Cantidad de mensajes</th>
            </tr>
        </thead>
        <tbody>
            <?php
          foreach($datos as $plan):
        ?>
            <tr>
                <td><?=$plan['plan_id'];?></td>
                <td><?=$plan['nombre'];?></td>
                <td><?=$plan['pago_mensual'];?></td>
                <td><?=$plan['cantidad_minutos'];?></td>
                <td><?=$plan['cantidad_mensajes'];?></td>
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