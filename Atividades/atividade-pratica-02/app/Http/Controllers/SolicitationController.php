<?php

namespace App\Http\Controllers;

use App\Models\Solicitation;
use App\Http\Requests\StoreSolicitationRequest;
use App\Http\Requests\UpdateSolicitationRequest;

class SolicitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('solicitations.index');
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
     * @param  \App\Http\Requests\StoreSolicitationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSolicitationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitation  $solicitation
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitation $solicitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitation  $solicitation
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitation $solicitation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSolicitationRequest  $request
     * @param  \App\Models\Solicitation  $solicitation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSolicitationRequest $request, Solicitation $solicitation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitation  $solicitation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitation $solicitation)
    {
        //
    }
}
