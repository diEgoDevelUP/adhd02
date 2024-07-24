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
    <title>Municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="<?php echo base_url('ciudadanos'); ?>"><button type="button" class="btn btn-primary">Ver pagina
            ciudadanos</button></a>
    <a href="<?php echo base_url('departamentos'); ?>"><button type="button" class="btn btn-primary">Ver pagina de
            departamentos
        </button></a>
    <a href="<?php echo base_url('niveles'); ?>"><button type="button" class="btn btn-primary">Ver pagina
            niveles academicos</button></a>
    <a href="<?php echo base_url('regiones'); ?>"><button type="button" class="btn btn-primary">Ver pagina de regiones
        </button></a>
    <h1>Municipios</h1>
    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>Codigo de municipio</th>
                <th>Nombre de municipio</th>
                <th>Codigo de departamento</th>
            </tr>
        </thead>
        <tbody>
            <?php
          foreach($datos as $departamento):
        ?>
            <tr>
                <td><?=$departamento['cod_muni'];?></td>
                <td><?=$departamento['nombre_municipio'];?></td>
                <td><?=$departamento['cod_depto'];?></td>
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