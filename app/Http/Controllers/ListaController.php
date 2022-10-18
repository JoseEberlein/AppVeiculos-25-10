<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function mostrar()
    {
        return view('ListarCarro');
    }
}
