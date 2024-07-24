<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelesAcademicosModel extends Model
{
    protected $table         = 'nivelesacademicos';
    protected $primarykey    = 'cod_nivel_acad';
    protected $allowedFields = [
        'cod_nivel_acad', 'nombre', 'descripcion'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}