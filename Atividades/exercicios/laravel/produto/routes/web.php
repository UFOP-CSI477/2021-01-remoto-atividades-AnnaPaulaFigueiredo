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

Route::get('/', function () {
    return view('principal');
})->name('principal');


Route::resource('/produtos', ProdutoController::class);


/*
Route::get('/products_all', function() {
    
    $produtos =  Produto::all();

    return view('lista_de_produtos', ['dados'=> $produtos]);

});

Route::get('/id/{id}', function($id){

    $produto = Produto::find($id);

    if ($produto == null){
      return "Id inválido";
    }

    return   view('lista_de_produtos', ['dados'=> $produto]);
});
*/

