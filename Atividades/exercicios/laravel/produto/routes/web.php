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
use App\Models\Produto;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\CompraController;

Route::get('/', function () {
    return view('principal');
})->name('principal');


Route::resource('/produtos', ProdutoController::class)->middleware('auth');

Route::resource('/pessoas', PessoaController::class)->middleware('auth');

Route::resource('/compras', CompraController::class)->middleware('auth');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
