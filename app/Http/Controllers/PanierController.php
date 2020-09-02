<?php

namespace App\Http\Controllers;

use App\Ouvrage;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panier.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicata = cart::search(function ($cartItem, $rowId) use($request){
            return $cartItem->id == $request->ouvrage_id;
        });

        if($duplicata->isNotEmpty()){
            return redirect()->back()->with('message1', 'Livre deja ajouté.');
        }
        $ouvrage = Ouvrage::find($request->ouvrage_id);

        Cart::add($ouvrage->id, $ouvrage->Titre, 1, $ouvrage->prix)
        ->associate('App\Ouvrage');
        return redirect()->back()->with('message1', 'Livre ajouté avec succès ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ouvrage = Ouvrage::find($id);
        //dd($ouvrage->model->prix);
        $imprime = floatval($ouvrage->prix) + 1000;
        return view('panier.show', compact('ouvrage', 'imprime'));
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
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->back()->with('message', 'Livre retiré du panier avec succès.');
    }
}
