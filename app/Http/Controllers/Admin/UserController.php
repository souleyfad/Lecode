<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.user.users', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'pseudo' => 'required|min:2',
            'date_naissance' => 'required|date',
            'adresse' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
            'isEditeur' => 'required|boolean',
            'isAuteur' => 'required|boolean',
            'isClient' => 'required|boolean',
        ]);
        $data['password']= Hash::make($data['password']);
        //dd($data);
        User::create($data)->save();
        return redirect()->route('admin.users')->with('message', 'Ajout effectuée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.showuser',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edituser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data=request()->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'pseudo' => 'required|min:2',
            'date_naissance' => 'required|date',
            'adresse' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
            'isEditeur' => 'required|boolean',
            'isAuteur' => 'required|boolean',
            'isClient' => 'required|boolean',
        ]);
        $data['password']= Hash::make($data['password']);
        //dd($data);
        $user->update($data);
        
        //return redirect()->route('admin.showuser'.$user->id)->with('message', 'Modification effectuée avec succès.');
         return redirect()->route('admin.users')->with('message', 'Modification effectuée avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users')->with('message', 'Suppression effectuée avec succès.');

    }

    public function search(Request $request)
    {
        request()->validate([
            'indice' => 'required|min:4'
        ]);
        $indice = $request->get('indice');
        $user = User::where('nom', 'like', "%$indice%")
            ->orWhere('prenom', 'like', "%$indice%")
            ->orWhere('pseudo', 'like', "%$indice%")
            ->paginate(6);
            return view('admin.user.users', compact('user'));
    }
}
