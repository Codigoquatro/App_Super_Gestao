<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return 'ola, estou na aula!';
});\*/

Route::get('/',[\App\Http\Controllers\PrincipalController::class, 'principal']->name('site.index'));
Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class, 'sobreNos']->name('site.sobrenos'));
Route::get('/contato',[\App\Http\Controllers\ContatoController::class, 'contato']->name('site.contato'));
Route::get('/login', function() { return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function() { return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function() { return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function() { return 'Produtos';})->name('app.produtos');

});
