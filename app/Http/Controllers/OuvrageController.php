<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Ouvrage;
use App\Commentaire;
use Illuminate\Http\Request;

class OuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::all();
        if(request()->genre)
        {
            $ouvrage = Ouvrage::with('genre')->whereHas('genre', function($query) {
                $query->where('slug', request()->genre);
            })->paginate(6);
        } else {
            $ouvrage = Ouvrage::latest()->take(12)->get();
        }
        return view('ouvrage.index', compact('ouvrage', 'genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ouvrage = Ouvrage::all();
        $genre = Genre::all();
        return view('ouvrage.create', compact('ouvrage', 'genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Ouvrage();

        if ($request->file('ouvrage')){
            $file=$request->file('ouvrage');
            $nom=$file->getClientOriginalName();
            $filename=$nom.'_'.time().'.'.$file->getClientOriginalExtension();
            $file->move('storage/Ouvrages/',$filename);
            $data->ouvrage=$filename;
        }
        if ($request->file('Couverture')){
            $file=$request->file('Couverture');
            $nom=$file->getClientOriginalName();
            $filename=$nom;
            $file->move('storage/Couverture/',$filename);
            $data->Couverture=$filename;
        }

        $data->Titre= $request->Titre;
        $data->Genre_id= $request->Genre;
        $data->Resume= $request->Resume;
        $data->Auteur= $request->Auteur;
        $data->prix= $request->prix;
        
        $data->save();
        return redirect()->route('ouvrage.create')->with('message', 'Envoi effectuée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ouvrage = Ouvrage::find($id);
        $commentaire = $ouvrage->withCount('Commentaire')->get();
        //dd($commentaire[$id]);
        //dd();
        return view('ouvrage.show', compact('ouvrage','commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function edit(Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ouvrage $ouvrage)
    {
        //
    }

    public function search(Request $request)
    {
        request()->validate([
            'indice' => 'required|min:4'
        ]);
        $indice = $request->get('indice');
        $ouvrage = Ouvrage::where('Titre', 'like', "%$indice%")
            ->orWhere('Auteur', 'like', "%$indice%")
            ->orWhere('Resume', 'like', "%$indice%")
            ->paginate(6);
            $genre = Genre::all();
        return view('ouvrage.search', compact('ouvrage','genre'));
    }

}
