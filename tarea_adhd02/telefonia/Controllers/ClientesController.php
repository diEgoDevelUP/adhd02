<?php

namespace App\Controllers;
use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        return view('clientes');
    }

    public function nuevoCliente(): string 
    {
        return view('clientes_nuevos');
    }

    public function agregarCliente(): string 
    {
        $datos=[
            'cliente_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNumeroCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];

        

        $clientes = new ClientesModel();
        $clientes->insert($datos);
        echo "Datos guardados";
        return "";
    }
}