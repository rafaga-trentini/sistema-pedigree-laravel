<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
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
        //     $dados = Animal::where('nome' , 'like', "$busca%")-get();
        // } else {
        //     $dados = Animal::all();
        // }

        $dados = Animal::all();
        
        return view("animal.index", ['animals'=>$dados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("animal.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = Animal::create($request->all());
        return redirect()->route('animal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(animal $animal)
    {
        $dados = Animal::find($id);
        return view('animal.show', ['animal'=>$dados]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        $dados = Animal::find($id);
        return view('animal.edit', ['animal'=>$dados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        Animal::filnd($id)->update($request->all());
        return redirect()->route('animal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        Animal::destroy($id);
        return redirect()->route('animal.index');
    }
}
