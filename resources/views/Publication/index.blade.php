@extends('admin.layout')

@section('contenu')
    <div class="container mt-5">

    <div id="entete">
    <h1 class="text-center">Recentes Manuscrits</h1>
    <p class="text-center">Vous avez acces à tous les recents manuiscrits envoyés afin de les 
    renvoyer vers les maisons d'edttions adequats</p>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Titre</th>
            <th scope="col">Genre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Expediteur</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($publication as $pub) 
            <tr>
            <th scope="row">{{ $pub->id }}</th>
            <td>{{ $pub->Titre }}</td>
            <td>{{ $pub->Genre }}</td>
            <td>{{ $pub->Auteur }}</td>
            <td>{{ $pub->user->nom }}</td>
            <td>
            <a href="{{ route('publication.show', $pub->id) }}" class="btn btn-secondary">Voir</a>
                <form action="{{ route('publication.destroy', $pub->id) }}" method="POST" style=" display: inline">
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
