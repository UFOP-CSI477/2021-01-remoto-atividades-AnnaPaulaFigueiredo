<?php

namespace App\Http\Controllers;

use App\Models\Vacina;
use App\Http\Requests\StoreVacinaRequest;
use App\Http\Requests\UpdateVacinaRequest;

class VacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVacinaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVacinaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function show(Vacina $vacina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacina $vacina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVacinaRequest  $request
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVacinaRequest $request, Vacina $vacina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacina $vacina)
    {
        //
    }
}
