<?php

namespace App\Http\Controllers;

use App\Models\Raca;
use Illuminate\Http\Request;

class RacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dados = array();
        // if (request('find') != null) {
        //     $busca = request('find');
        //     $dados = Raca::where('nome' , 'like', "$busca%")-get();
        // } else {
        //     $dados = Raca::all();
        // }

        $dados = Raca::all();
        
        return view("raca.index", ['racas'=>$dados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("raca.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = Raca::create($request->all());
        return redirect()->route('raca.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raca  $raca
     * @return \Illuminate\Http\Response
     */
    public function show(Raca $raca)
    {
        $dados = Raca::find($id);
        return view('raca.show', ['raca'=>$dados]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raca  $raca
     * @return \Illuminate\Http\Response
     */
    public function edit(Raca $raca)
    {
        $dados = Raca::find($id);
        return view('raca.edit', ['raca'=>$dados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Raca  $raca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raca $raca)
    {
        Raca::filnd($id)->update($request->all());
        return redirect()->route('raca.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raca  $raca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raca $raca)
    {
        Raca::destroy($id);
        return redirect()->route('raca.index');
    }
}
