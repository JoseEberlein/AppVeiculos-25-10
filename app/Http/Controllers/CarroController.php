<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carros;

class CarroController extends Controller
{
    public function FormularioCadastroCarro(){
        return view('cadastrarCarro');
    } 

    public function MostrarEditarCarro(){

        $dadosCarro = Carros::all();
        //dd($dadosCaminhao);
    
        return view('editarCarro', ['registrosCarro' => $dadosCarro]);
    }

    public function SalvarBancoCarro(Request $request){
        $dadosCarro = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);
        Carros::create($dadosCarro);
        return Redirect::route('home');
    }
     
}
