<?php

namespace App\Controllers;
use App\Models\ClienteModel;

class Cliente extends BaseController
{
    public function index(): string
    {
        $clientes= new ClienteModel();
        $datos['datos'] = $clientes->findAll();
        return view('clientes',$datos);
    }
}