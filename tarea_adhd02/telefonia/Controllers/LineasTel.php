<?php

namespace App\Controllers;
use App\Models\LineaTelModel;

class LineasTel extends BaseController
{
    public function index(): string
    {
        $lineasTel= new LineaTelModel();
        $datos['datos'] = $lineasTel->findAll();
        return view('lineasTel',$datos);
    }
}