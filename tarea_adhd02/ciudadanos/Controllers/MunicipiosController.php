<?php

namespace App\Controllers;
use App\Models\MunicipiosModel;

class MunicipiosController extends BaseController
{
    public function index(): string
    {
        $municipios = new MunicipiosModel();
        $datos['datos'] = $municipios->findAll();
        return view('municipios',$datos);
    }
}
