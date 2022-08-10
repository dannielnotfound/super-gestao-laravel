<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobrenos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login';})->name('site.login');

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'] )->name('site.teste');


Route::fallback(function(){
    #Retornar um controller/view 
    echo 'Está página não existe, clique aqui para retornar para a página principal. <a href="'.route('site.index').'">Aqui</a>';
});

#Agrupamento de Rotas
//Utiliza-se o método prefix e posteriormente o metodo group que espera uma funçao de callback contendo as rotas que farao parte deste grupo
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores',[FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');
});






# Tratando rotas com expressões regulares
// Route::get(
//     '/contato/{nome}/{categoria_id}', //
//     function(
//         string $nome = 'Daniel',
//         int $categoria_id = 1 // 1 - 'Informação'
//     ){
//     echo "Estamo aqui: $nome - $categoria_id";
// })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
