<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\ListarControllerCaminhao;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editar-caminhao',[CaminhaoController::class,'MostrarEditarCaminhao'])->name('editar-caminhao');
Route::get('/cadastrar-caminhao',[CaminhaoController::class,'FormularioCadastro'])->name('cadastrar-caminhao');
Route::post('/cadastrar-caminhao', [CaminhaoController::class,'SalvarBanco'])->name('salvar-banco');
Route::get('/alterar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'MostrarAlterarCaminhao'])->name('alterar-caminhao');
Route::put('/editar-caminhao/{registrosCaminhoes}',[CaminhaoController::Class,'AlterarBancoCaminhao'])->name('alterar-banco-caminhao');
//delete
Route::delete('/editar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'ApagarBancoCaminhao'])->name('apagar-caminhao');

Route::get('/cadastrar-carro', [CarroController::class,'FormularioCadastroCarro'])->name('cadastrar-carro');
Route::post('/cadastrar-carro', [CarroController::class,'SalvarBancoCarro'])->name('salvar-banco-carro');
Route::get('/editar-carro',[CarroController::class,'MostrarEditarCarro'])->name('editar-carro');
Route::get('/alterar-carro',[CarroController::class,'MostrarAlterarCarro'])->name('alterar-carro');
Route::put('/editar-carro/{registrosCarros}',[CarroController::Class,'AlterarBancoCarro'])->name('alterar-banco-carro');
//delete
Route::delete('/editar-carro/{registrosCarros}',[CarroController::class,'ApagarBancoCarro'])->name('apagar-carro');

Route::get('/ListarCarro',[ListaController::class,'mostrar']);
Route::get('/listarCaminhao',[ListarControllerCaminhao::class,'mostrar']);