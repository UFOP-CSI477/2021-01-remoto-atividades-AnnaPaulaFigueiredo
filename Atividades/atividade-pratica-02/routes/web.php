<?php

use Illuminate\Support\Facades\Route;

use App\Models\Protocol;
use App\Models\Solicitation;

use App\Http\Controllers\ProtocolController;
use App\Http\Controllers\SolicitationController;


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
Route::get('/administrative', function () {
    return view('viewAdministrative');
})->name('viewAdministrative');

Route::get('/', function () {
    return view('viewBase');
})->name('viewBase');

Route::resource('/solicitations', SolicitationController::class);

Route::resource('/protocols', ProtocolController::class);

Route::get('/viewEdit', function () {
    return view('protocols.list');
})->name('viewEdit');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
