<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
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
        return view('pages.create',[
            'action' => "/pokemon",
            'method' => false,
            'values' =>  false,
            'types'=>Type::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pokemon = new Pokemon();
        $pokemon->name = $request->name;
        Storage::put('public/img/', $request->file('src'));
        $pokemon->src = $request->file('src')->hashName();
        $pokemon->level = $request->level;
        $pokemon->type_id = $request->type_id;
        $pokemon->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        return view('pages.show',[
            'pokemon'=>$pokemon,
            'type'=>Type::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        return view('pages.edit',[
            'pokemon'=>$pokemon,
            'types'=>Type::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $pokemon->name = $request->name;
        Storage::delete('public/img/'.$pokemon->src);
        Storage::put('public/img/', $request->file('src'));
        $pokemon->src = $request->file('src')->hashName();
        $pokemon->level = $request->level;
        $pokemon->type_id = $request->type_id;
        $pokemon->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        Storage::delete('public/img/'.$pokemon->src);
        $pokemon->delete();

        return redirect()->back();
    }
}
