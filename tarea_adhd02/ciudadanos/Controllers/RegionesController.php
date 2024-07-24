<?php

namespace App\Controllers;
use App\Models\RegionesModel;

class RegionesController extends BaseController
{
    public function index(): string
    {
        $regiones = new RegionesModel();
        $datos['datos'] = $regiones->findAll();
        return view('regiones',$datos);
    }
}