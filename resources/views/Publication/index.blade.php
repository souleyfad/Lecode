@extends('admin.layout')

@section('contenu')
<div class="container">

<div class="row">
    <div class="col-auto">
        <a href="#" class="btn btn-success text-left ml-0">Nouvel utilisateur</a>
    </div>
    <div class="col-auto  offset-5">
    <form action="{{ route('publication.search') }}" method="get" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" name="indice" value="{{ request()->indice ?? '' }}" placeholder="Tapez votre recherche" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        <a href="{{ route('admin.home')}}" class="btn btn-primary text-right mr-0">Retour à l'accueil</a>
    </div>
</div>
<div class="table-responsive table--no-card m-b-40">
<table class="table table-borderless table-striped table-earning table-hover">
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
            <td>{{ $pub->genre->name }}</td>
            <td>{{ $pub->Auteur }}</td>
            <td>{{ $pub->user->nom }}</td>
            <td>
            @if(auth()->user()->isEditeur == 1)
            <a href="{{ route('editpub.show', $pub->id) }}" class="btn btn-secondary">Voir</a>
            @else
            <a href="{{ route('publication.show', $pub->id) }}" class="btn btn-secondary">Voir</a>
            @endif
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
