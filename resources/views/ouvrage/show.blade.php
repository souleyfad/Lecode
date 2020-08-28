@extends('layouts.app')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container mt-5 pt-5">

            <div class="row">
                    <div class="col-md-2 offset-md-1 mt-5 pt-4">
                    <img src="/storage/Couverture/{{ $ouvrage->Couverture }}" width="100%" height="225" alt="couverture">
                    </div>
                    <div class="col-md-5 offset-md-4 mt-5 pt-4">
                        <h2 class="mb-2">{{ $ouvrage->Titre }}</h2>
                        <h6 class="mb-2">de {{ $ouvrage->Auteur }}</h6>
                        <p class="text-justify">{{ $ouvrage->Resume }}</p>
                        <div class="mb-2">Prix : <strong class="mb-1 text-muted">{{ $ouvrage->prix }} <sup>F</sup> </strong></div>
                        <form action="{{ route('panier.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="ouvrage_id" value="{{ $ouvrage->id }}">
                            <button type="submit" class="btn btn-success">Ajouter au panier</button>
                        </form>
                    </div> 
            </div>
            <hr>
            <div>
                <h5>Commentaires</h5>
                @forelse($ouvrage->commentaire as $comment)
                    <div class="card mb-2">
                        <div class="card-body">
                            {{ $comment->contenu}}
                            <div class="d-flex justify-content-betwen align-items-center"></div>
                            <small>posté le {{ $comment->created_at->format('d/m/Y')}}</small>
                            <span class="badge badge-success">{{ $comment->user->nom }}</span>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info"> Aucun commentaire pour le moment soyez le premier à en faire</div>
                @endforelse
                <form action="{{ route('commentaire.store', $ouvrage) }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="contenu">Votre commentaire</label>
                        <textarea name="contenu" id="contenu" cols="30" rows="5" 
                        class="form-control @error('contenu') is-invalid @enderror">
                        </textarea>
                        @error('contenu')
                        <div class="invalid-feedback">{{ $errors->first('contenu')}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Envoyer le commentaire</button>
                </form>
            </div>
        </div>
    </div>
@endsection