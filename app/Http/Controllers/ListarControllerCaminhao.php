<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarControllerCaminhao extends Controller
{
    public function mostrar()
    {
        return view('listarCaminhao');
    }
}
