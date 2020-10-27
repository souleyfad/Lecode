<?php

namespace App\Http\Controllers;

use App\Achat;
use App\User;
use App\Ouvrage;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AccueilController extends Controller
{
    public function index(){
        $ouvrage = Ouvrage::all();
        return view('Accueil.welcome', compact('ouvrage'));
    }

    public function contact(){
        return view('Accueil.contact');
    }

    public function create(){
        return view('Accueil.welcome');
    }

    public function store(){
        $data = request()->validate([
            'pseudo'=>'required',
            'email'=>'required|email',
            'message'=>'required|min:5'
       ]);
        Mail::to('test@test.com')->send(new ContactMail($data));
        return redirect('Accueil.welcome')->with('message','message envoyé avec succès'); 
    }

    public function bibliotheque(User $user){
        $id = $user->id;
        $achats = Achat::where('user_id', $id)->get();
            for($i = 0; $i < $achats->count(); $i++){
                $livres[][] = unserialize($achats[$i]->ouvrage);
            }
            //dd($livres);
            /*$l=count($livres);
            dd($l);
            for($i = 0; $i < $l; $i++){
                $livres[$i];
            }*/
            if($achats->count() ==0)
            {
                return view('Accueil.bibliotheque', compact('achats'));
            }
            else
            {
                return view('Accueil.bibliotheque', compact('achats', 'livres'));
            }
    }

    public function apercubiblio($id){
        $ouvrage = Ouvrage::find($id);
        return view('Accueil.apercubiblio', compact('ouvrage'));
    }
}
