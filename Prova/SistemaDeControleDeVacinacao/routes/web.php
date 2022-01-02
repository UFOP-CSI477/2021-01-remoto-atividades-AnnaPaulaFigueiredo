<?php

use Illuminate\Support\Facades\Route;

use App\Models\Pessoa;
use App\Models\Unidade;
use App\Models\Vacina;
use App\Models\Registro;

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\VacinaController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ConsultaController;

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

Route::get('/', function () {
    return view('principal');
})->name('principal');

//Route::get('/areaGeral', function () {
//    return view('areaGeral');
//})->name('areaGeral');

Route::get('/areaAdministrativa', function () {
    return view('/areaAdministrativa');
})->name('areaAdministrativa');

Route::get('/menuPessoas', function () {
    return view('menuPessoas');
})->name('menuPessoas');

Route::get('/menuVacinas', function () {
    return view('menuVacinas');
})->name('menuVacinas');

Route::get('/menuUnidades', function () {
    return view('menuUnidades');
})->name('menuUnidades');

Route::resource('/pessoas', PessoaController::class);

Route::resource('/unidades', UnidadeController::class);

Route::resource('/vacinas', VacinaController::class);

Route::resource('/registros', RegistroController::class);

Route::resource('/areaGeral', ConsultaController::class);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
