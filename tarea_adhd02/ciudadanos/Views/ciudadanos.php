<!doctype html>
<html lang="es">

<head>
    <style>
    body {
        background: linear-gradient(to left, skyblue, gray);
    }

    h1 {
        text-allign: center;
        color: white;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="<?php echo base_url('departamentos'); ?>"><button type="button" class="btn btn-primary">Ver pagina
            departamentos</button></a>
    <a href="<?php echo base_url('municipios'); ?>"><button type="button" class="btn btn-primary">Ver pagina de
            municipios
        </button></a>
    <a href="<?php echo base_url('niveles'); ?>"><button type="button" class="btn btn-primary">Ver pagina
            niveles academicos</button></a>
    <a href="<?php echo base_url('regiones'); ?>"><button type="button" class="btn btn-primary">Ver pagina de regiones
        </button></a>
    <h1>Ciudadanos</h1>
    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>DPI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono de casa</th>
                <th>Telefono de movil</th>
                <th>Email</th>
                <th>Fecha de nacimiento</th>
                <th>Codigo de nivel academico</th>
                <th>Codigo de municipio</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php
          foreach($datos as $ciudadano):
        ?>
            <tr>
                <td><?=$ciudadano['dpi'];?></td>
                <td><?=$ciudadano['apellido'];?></td>
                <td><?=$ciudadano['nombre'];?></td>
                <td><?=$ciudadano['direccion'];?></td>
                <td><?=$ciudadano['tel_casa'];?></td>
                <td><?=$ciudadano['tel_movil'];?></td>
                <td><?=$ciudadano['email'];?></td>
                <td><?=$ciudadano['fechanac'];?></td>
                <td><?=$ciudadano['cod_nivel_acad'];?></td>
                <td><?=$ciudadano['cod_muni'];?></td>
                <td><?=$ciudadano['contra'];?></td>
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