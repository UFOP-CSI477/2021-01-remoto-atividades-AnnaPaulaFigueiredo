<?php

namespace App\Http\Controllers;

use App\Models\Protocol;
use App\Http\Requests\StoreProtocolRequest;
use App\Http\Requests\UpdateProtocolRequest;

class ProtocolController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('protocols.index');
    }

    public function viewEdit()
    {   
       // $protocols = Protocol::orderBy('id')->get();

        // view('protocols.list', ['protocols'=> $protocols]);
        return view('protocols.index');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('protocols.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProtocolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProtocolRequest $request)
    {
        Request::create($request->all());
        session()->flash('mensagem', 'Success Protocol !');
        return redirect()->route('protocols.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Protocol  $protocol
     * @return \Illuminate\Http\Response
     */
    public function show(Protocol $protocol)
    {
        //return view('protocols.show', ['protocol' => $protocol]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Protocol  $protocol
     * @return \Illuminate\Http\Response
     */
    public function edit(Protocol $protocol)
    {
        return view("protocols.edit", ['protocol'=>$protocol]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProtocolRequest  $request
     * @param  \App\Models\Protocol  $protocol
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProtocolRequest $request, Protocol $protocol)
    {
        $protocol->fill($request->all());
        $protocol->save();

        session()->flash('mensagem', 'Success Updated !');
        return redirect()->route('protocols.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Protocol  $protocol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Protocol $protocol)
    {
        session()->flash('mensagem', "Deleted Success!");
       
        return redirect()->route('protocols.index');
    }
}
