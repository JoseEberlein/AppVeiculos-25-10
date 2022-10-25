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

    public function MostrarEditarCarro(Request $request){

        $dadosCarro = Carros::query();
        $dadosCarro->when($request->marca, function($query, $vl){
            $query->where('marca', 'like', '%'.$vl.'%');
        });
        $dadosCarro = $dadosCarro->get();

        //dd($dadosCaminhao);
        
        return view('editarCarro',['registrosCarro' => $dadosCarro]);
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
    
    public function ApagarBancoCarro(Carros $registrosCarros){
        //dd($registrosCaminhoes);
        $registrosCarros->delete();
        //Caminhao::findOrFail($id)->delete();
        return Redirect::route('editar-carro');
    }

    public function MostrarAlterarCarro(Carros $registrosCarros){
        return view('alterarCarro',['registrosCarros' => $registrosCarros]);

    }
    public function AlterarBancoCarro(Carros $registrosCarros, Request $request){
        $banco = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);

    $registrosCarros->fill($banco);
    $registrosCarros->save();
    
    return Redirect::route('editar-carro');
    //dd($registrosCaminhoes);
    }
}