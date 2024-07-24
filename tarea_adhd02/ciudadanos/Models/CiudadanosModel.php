<?php

namespace App\Models;

use CodeIgniter\Model;

class CiudadanosModel extends Model
{
    protected $table         = 'ciudadanos';
    protected $primarykey    = 'dpi';
    protected $allowedFields = [
        'dpi', 'apellido', 'nombre','direccion','tel_casa','tel_movil','email','fechanac','cod_nivel_acad','cod_muni','contra'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}