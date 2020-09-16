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
            <th scope="col">Acheteur</th>
            <th scope="col">Moyen Payement</th>
            <th scope="col">Montant</th>
            <th scope="col">Date d'achat</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($achat as $achat) 
            <tr>
            <th scope="row">{{ $achat->id }}</th>
            <td>@if( $achat->user_id == 0) Non identifié  
                @else {{ $achat->user->nom }} 
                @endif
            </td>
            <td>{{ $achat->montant }}</td>
            <td>{{ $achat->moyenPayement }}</td>
            <td>{{ $achat->created_at->format('d/m/Y') }}</td>
            <td>
            <a href="#" class="btn btn-secondary">Voir</a>
                <form action="#" method="POST" style=" display: inline">
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