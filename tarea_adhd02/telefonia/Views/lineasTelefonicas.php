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
    <title>Lineas telefonicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="<?php echo base_url('cliente'); ?>"><button type="button" class="btn btn-primary">Ver pagina clientes
            </button></a>
    <a href="<?php echo base_url('planes'); ?>"><button type="button" class="btn btn-primary">Ver pagina
            planes</button></a>
    <h1>Lineas Telefonicas</h1>
    <table class=" table table-striped table-border">
        <thead>
            <tr>
                <th>No. telefono</th>
                <th>Fecha de pago </th>
                <th>Meses de atraso</th>
                <th>lineatel ID</th>
                <th>Cliente ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
          foreach($datos as $lineatel):
        ?>
            <tr>
                <td><?=$lineatel['no_telefono'];?></td>
                <td><?=$lineatel['fecha_pago'];?></td>
                <td><?=$lineatel['meses_atraso'];?></td>
                <td><?=$lineatel['plan_id'];?></td>
                <td><?=$lineatel['cliente_id'];?></td>
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