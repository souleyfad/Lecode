<?php

namespace App\Http\Controllers;

use App\Achat;
use App\User;
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
    /*public function __construct()
    {
        $this->middleware('auth:admin');
    }*/
    public function index(){
        $user = User::all();
        $publication = Publication::all();
        $ouvrage = Ouvrage::all();
        $achat = Achat::all();
        return view('admin.home', compact('user', 'publication', 'ouvrage', 'achat'));
    }
}
