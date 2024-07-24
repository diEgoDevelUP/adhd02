<?php

namespace App\Controllers;
use App\Models\NivelesAcademicosModel;

class NivelesAcademicosController extends BaseController
{
    public function index(): string
    {
        $nivel = new NivelesAcademicosModel();
        $datos['datos'] = $nivel->findAll();
        return view('niveles',$datos);
    }
}
