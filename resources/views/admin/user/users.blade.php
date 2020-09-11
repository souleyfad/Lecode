@extends('admin.layout')

@section('contenu')
    <div class="container">

    <div class="row">
        <div class="">
            <a href="#" class="btn btn-success text-left ml-0">Nouvel utilisateur</a>
        </div>
        <div class="">
            <a href="#" class="btn btn-primary text-right mr-0">Nouvel utilisateur</a>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Pseudo</th>
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
            <td>{{ $user->pseudo }}</td>
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