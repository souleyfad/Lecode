<?php

namespace App\Http\Controllers;

use App\User;
use App\Achat;
use App\Genre;
use App\Ouvrage;
use App\Publication;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $user = User::all();
        $publication = Publication::all();
        $ouvrage = Ouvrage::all();
        $achat = Achat::all();
        return view('admin.home', compact('user', 'publication', 'ouvrage', 'achat'));
    }

    public function ouvrage()
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
        return view('admin.ouvrage.viewadmin', compact('ouvrage', 'genre'));
    }

    
    public function showouvrage($id)
    {
        $ouvrage = Ouvrage::find($id);
        $commentaire = $ouvrage->withCount('Commentaire')->get();
        //dd($commentaire[$id]);
        //dd();
        return view('admin.ouvrage.showadmin', compact('ouvrage','commentaire'));
    }

    public function searchouvrage(Request $request)
    {
        request()->validate([
            'indice' => 'required|min:4'
        ]);
        $indice = $request->get('indice');
        $ouvrage = Ouvrage::where('Titre', 'like', "%$indice%")
            ->orWhere('Auteur', 'like', "%$indice%")
            ->orWhere('Resume', 'like', "%$indice%")
            ->paginate(6);
            return view('admin.ouvrage.viewadmin', compact('ouvrage'));
    }

}
