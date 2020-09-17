<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Ouvrage;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre= Genre::all();
        return view('admin.genre.index', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'=>'required|min:3',
            'slug'=>'required|min:3'
        ]); 
        
        Genre::create($data);

        return back()->with('message','nouveau genre ajouter avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::find($id);
        $ouvrage= Ouvrage::where('Genre_id', $id)->get();
        return view('admin.genre.show', compact('genre', 'ouvrage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return back()->with('message', 'Suppression effectuée avec succès.');      
    
    }

    public function search(Request $request)
    {
        request()->validate([
            'indice' => 'required|min:4'
        ]);
        $indice = $request->get('indice');
        $genre = Genre::where('name', 'like', "%$indice%")
            ->orWhere('slug', 'like', "%$indice%")
            ->paginate(6);
            return view('admin.genre.index', compact('genre'));
    }
}
