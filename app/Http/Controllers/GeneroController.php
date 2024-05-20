<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = Genero::all();
        return view('generoIndex', compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('generoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Genero::create($request->all());
        return redirect('/genero');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genero $genero)
    {
        return view('/generoShow', compact('genero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genero $genero)
    {
        return view('generoEdit', compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genero $genero)
    {
        Genero::where('id', $genero->id)->update($request->except('_token', '_method', 'action'));
        return redirect('/genero');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genero $genero)
    {
        $genero->delete();
        // Session()->flash('success', 'Se ha eliminado con éxito');
        return redirect('/genero');
    }
}
