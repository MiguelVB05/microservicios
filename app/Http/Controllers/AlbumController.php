<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genero;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        return view('albumIndex', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = Genero::all();
        return view('albumCreate', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album = new Album();
        $album->nombre = $request->nombre;
        $album->precio = $request->precio;
        $album->banda = $request->banda;
        $album->save();

        $album->generos()->attach($request->generos);
        //$album->generos()->attach($request->generos);
        //Album::create($request->all());
        Session()->flash('success','Se guardo perro sarnozo');
        return redirect('/album');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('/albumShow', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $generos = Genero::all();
        return view('albumEdit', compact('generos','album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $album->nombre = $request->nombre;
        $album->precio = $request->precio;
        $album->banda = $request->banda;
        $album->save();

        if ($request->has('generos')) {
            $album->generos()->sync($request->generos);
        }else{
            $album->generos()->detach();
        }

        //Album::where('id', $album->id)->update($request->except('_token', '_method', 'action'));
        return redirect('/album');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();
        Session()->flash('success', 'Se ha eliminado con éxito');
        return redirect('/album');
    }
}
