@extends('admin.layout')

@section('contenu')
    <div class="container">

    <div class="row">
        <div class="col-auto">
            <a href="{{ route('users.create') }}" class="btn btn-success text-left ml-0">Nouvel utilisateur</a>
        </div>
        <div class="col-auto  offset-8">
            <a href="{{ route('admin.home')}}" class="btn btn-primary text-right mr-0">Retour à l'accueil</a>
        </div>
    </div>
    <div class="table-responsive table--no-card m-b-40">
    <table class="table table-borderless table-striped table-earning table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Pseudo</th>
            <th scope="col">Editeur</th>
            <th scope="col">Auteur</th>
            <th scope="col">Client</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($user as $user) 
            <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->nom }}</td>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->pseudo }}</td>
            <td>@if( $user->isEditeur == 0) Non  
                @elseif( $user->isEditeur == 1) Oui 
                @endif
            </td>
            <td>@if( $user->isAuteur == 0) Non  
                @elseif( $user->isAuteur == 1) Oui 
                @endif</td>
            <td>@if( $user->isClient == 0) Non  
                @elseif( $user->isClient == 1) Oui 
                @endif</td>
            <td>
            <a href="{{ route('user.show', $user->id) }}" class="btn btn-secondary">Voir</a>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style=" display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> supprrimer</button>
                </form>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        </div>
    </div>
@endsection