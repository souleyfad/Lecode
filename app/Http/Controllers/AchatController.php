<?php

namespace App\Http\Controllers;

use App\Achat;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achat = Achat::all();
        return view('admin.achat.index', compact('achat'));
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
        $achat= new Achat();

        $achat->montant = request('montant');
        $achat->moyenPayement = request('moyenPayement');
        $ouvrages = [];
        $i=0;
        foreach(Cart::content() as $ouvrage){
            $ouvrages['ouvrage_'.$i][]= $ouvrage->model->Titre;
            $ouvrages['ouvrage_'.$i][]= $ouvrage->model->Couverture;
            $ouvrages['ouvrage_'.$i][]= $ouvrage->model->Auteur;
            $i++;
        }

        $achat->ouvrage = serialize($ouvrages);
        $achat->user_id = auth()->user()->id ?? 0;

        $achat->save();
        if ($achat->user_id !=0) {
            auth()->user()->isClient = true;
            auth()->user()->save();
        } elseif ($achat->user_id !=0) {
            echo'<script>
            alert(\'Creer vous un compte dans l\'onglet s\'inscrire pour beneficier de façon optimal de cette application\');
            </script>';
        }
        
        Cart::destroy();
        return redirect()->route('ouvrage')->with('message', 'Votre commande a bien été enregistré. Voulez-vous d\'autre livres.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function show(Achat $achat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function edit(Achat $achat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achat $achat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achat $achat)
    {
        //
    }

    public function search(Request $request)
    {
        request()->validate([
            'indice' => 'required|min:4'
        ]);
        $indice = $request->get('indice');
        $achat = Achat::where('montant', 'like', "%$indice%")
            ->orWhere('moyenPayement', 'like', "%$indice%")
            ->paginate(6);
            return view('admin.achat.index', compact('achat'));
        }
}

