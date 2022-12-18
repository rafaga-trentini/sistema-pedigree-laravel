<?php

namespace App\Http\Controllers;

use App\Models\Animal_Usuario;
use Illuminate\Http\Request;

class AnimalUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filtro = request()->input('filtro');
        $animalsUsuario = Animal_Usuario::where('data_aquisicao', 'LIKE', $filtro.'%')->orderby('data_aquisicao')->paginate(5);
        return view('animalUsuario/index')->with('animalsUsuario', $animalsUsuario)->with('filtro', $filtro);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("animalUsuario.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = Animal_Usuario::create($request->all());

        return redirect()->route('animalUsuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal_Usuario  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal_Usuario $animalUsuario)
    {
        $dados = Animal_Usuario::find($animalUsuario['data_aquisicao']);
        return view('animalUsuario.show', ['animalsUsuario'=>$dados]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal_Usuario  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal_Usuario $animalUsuario)
    {
        $dados = Animal_Usuario::find($animalUsuario['data_aquisicao']);
        return view('animalUsuario.edit', ['animalsUsuario'=>$dados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal_Usuario  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal_Usuario $animalUsuario)
    {
        Animal_Usuario::filnd($animalUsuario['data_aquisicao'])->update($request->all());
        return redirect()->route('animalUsuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal_Usuario  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal_Usuario $animalUsuario)
    {
        Animal_Usuario::destroy($animalUsuario['data_aquisicao']);
        return redirect()->route('animalUsuario.index');
    }
}
