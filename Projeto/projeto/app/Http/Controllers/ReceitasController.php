<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\MinhasReceitas;

use App\Http\Requests\ReceitasRequest;

class ReceitasController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $objReceitas;

    public function __construct()
    {
        $this->objReceitas=new MinhasReceitas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receita = MinhasReceitas::orderBy('nome')->get();
        return view('receitas', ['receita'=>$receita]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReceitasRequest $request)
    {
        MinhasReceitas::create($request->all());
        session()->flash('mensagem', 'Receita cadastrada com sucesso!');
        return redirect()->route('receitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('receitas.show', ['receita'=> MinhasReceitas::get()->where('id', '=', $id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MinhasReceitas $receita)
    {
        return view('receitas.edit', ['receita'=>$receita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReceitasRequest $request, MinhasReceitas $receita)
    {
        $receita->fill($request->all());
        $receita->save();

        session()->flash('mensagem', 'Receita atualizada com sucesso!');
        return redirect()->route('receitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delF=$this->objReceitas->destroy($id);
        return($delF)?"sim":"não";
    }

}
