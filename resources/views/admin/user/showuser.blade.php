@extends('admin.layout')

@section('contenu')
<div class="album bg-light">
        <div class="container pt-5">
            <div class="row">
                    <div class="col-md-2 offset-md-1 pt-4">
                    <img src="/storage/Couverture/usericon.png" width="255" height="225" alt="couverture">
                    </div>
                    <div class="col-md-5 offset-md-4 pt-4">
                        <h2 class="mb-2">{{ $user->nom }}</h2>
                        <h6 class="mb-2">{{ $user->prenom }} </h6>
                        <p class="text-justify">{{ $user->pseudo }}</p>
                        <p class="text-justify">Né le {{ $user->date_naissance }} résident a {{ $user->adresse }} 
                            pouvant être contactez sur {{ $user->email }}
                        </p>
                        <div class="row mt-3">
                            <div class="col-auto">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Voir les œuvres</a>
                            </div>
                            <div class="col-auto">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Modifier</a>
                            </div>
                        </div>
                    </div> 
            </div>
        <hr>
    </div>
</div>
@endsection