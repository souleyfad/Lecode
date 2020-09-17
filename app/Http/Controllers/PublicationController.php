<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show','destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publication = Publication::all();
        $genre = Genre::all();
        return view('Publication.index', compact('publication'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view('Publication.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Publication();

        if ($request->file('ouvrage')){
            $file=$request->file('ouvrage');
            $nom=$file->getClientOriginalName();
            $filename=$nom.'_'.time().'.'.$file->getClientOriginalExtension();
            $file->move('storage/Manuscrits/',$filename);
            $data->ouvrage=$filename;
        }
        $data->Titre= $request->Titre;
        $data->Genre_id= $request->Genre;
        $data->Resume= $request->Resume;
        $data->auteur= $request->auteur;

        auth()->user()->Publication()->save($data);
        auth()->user()->isAuteur= 1;
        auth()->user()->save();
        return redirect()->back()->with('message', 'Envoi effectuée avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::find($id);
        return view('Publication.show',compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect('Publication.index')->with('message', 'Suppression effectuée avec succès.');      
    }

    public function search(Request $request)
    {
        request()->validate([
            'indice' => 'required|min:4'
        ]);
        $indice = $request->get('indice');
        $publication = Publication::where('Titre', 'like', "%$indice%")
            ->orWhere('Auteur', 'like', "%$indice%")
            ->orWhere('Resume', 'like', "%$indice%")
            ->paginate(6);
            return view('Publication.index', compact('publication'));
    }
}
