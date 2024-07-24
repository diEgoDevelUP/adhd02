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
    <title>Niveles academicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="<?php echo base_url('ciudadanos'); ?>"><button type="button" class="btn btn-primary">Ver pagina
            ciudadanos</button></a>
    <a href="<?php echo base_url('departamentos'); ?>"><button type="button" class="btn btn-primary">Ver pagina
            departamentos</button></a>
    <a href="<?php echo base_url('municipios'); ?>"><button type="button" class="btn btn-primary">Ver pagina de
            municipios
        </button></a>
    <a href="<?php echo base_url('regiones'); ?>"><button type="button" class="btn btn-primary">Ver pagina de regiones
        </button></a>
    <h1>Niveles Academicos</h1>
    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>Codigo de nivel academico</th>
                <th>Nombre</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
          foreach($datos as $nivelAcad):
        ?>
            <tr>
                <td><?=$nivelAcad['cod_nivel_acad'];?></td>
                <td><?=$nivelAcad['nombre'];?></td>
                <td><?=$nivelAcad['descripcion'];?></td>
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