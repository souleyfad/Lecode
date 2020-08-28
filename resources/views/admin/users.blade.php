@extends('admin.layout')

@section('contenu')
    <div class="container mt-5">

    <div id="entete">
    <h1 class="text-center">Liste des utilisateurs</h1>
    <p class="text-center">Vous avez acces à tous les utilisateurs ; vous pouvez les supprimer
        les modifier ; ou avoir accès à eux.
    </p>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">isEditeur</th>
            <th scope="col">isAuteur</th>
            <th scope="col">isClient</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($user as $user) 
            <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->nom }}</td>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->isEditeur }}</td>
            <td>{{ $user->isAuteur }}</td>
            <td>{{ $user->isClient }}</td>
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