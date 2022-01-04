<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Receitas;
use Illuminate\Http\Request;

use App\Http\Requests\ReceitasRequest;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $objReceitas;

    public function __construct()
    {
        $this->objReceitas=new Receitas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receita = Receitas::orderBy('nome')->get();
        return view('home', ['receita'=>$receita]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('home.show', ['receita'=>Receitas::get()->where('id', '=', $id)]);
    }

}
