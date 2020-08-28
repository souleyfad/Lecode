@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row mt-5">
    <p class="mt-5 text-center ml-5" id="advice">
    Des conseils très utiles en vue de la bonne evoluton de votre œuvres sont 
    prevu  <a href="#">ici</a>. Mais si vous voulez, publier vous juste <a href="#">en dessous là</a> 
    </p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">Publier votre ouvrage</div>

                <div class="card-body">
                    <form action="{{ route('publication.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titre">titre</label>
                        <input type="text" class="form-control @error('Titre') is-invalid @enderror" 
                        name="Titre" placeholder="entrez le titre" required>
                        @error('Titre')
                        <div class="invalid-feedback">{{ $errors->first('Titre')}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <div class="input-group">
                        <select class="custom-select" id="genre" name="Genre" aria-label="Genre" required>
                        @foreach($genre as $genre)
                            <option value="{{ $genre->id}}">{{ $genre->name }}</option>
                        @endforeach
                        </select>
                        </div>
                        @error('Genre')
                        <div class="invalid-feedback">{{ $errors->first('Genre')}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="resume">resumé</label>
                        <textarea name="Resume" id="resume" cols="10" rows="5"
         class="form-control @error('Resume') is-invalid @enderror" placeholder="Faites unrésumé" required></textarea>
                        @error('Resume')
                        <div class="invalid-feedback">{{ $errors->first('resume')}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="auteur">auteur</label>
                        <input type="text" class="form-control @error('auteur') is-invalid @enderror" 
                        name="auteur" placeholder="nom complet de l'auteur" required>
                        @error('auteur')
                        <div class="invalid-feedback">{{ $errors->first('auteur')}}</div>
                        @enderror
                    </div>

                    <div class="custom-file">
                    <div class="form-group">
                    <label for="ouvrage">ouvrage</label>
                <input type="file" class="form-control @error('ouvrage') is-invalid @enderror" 
                name="ouvrage" id="ouvrage" placeholder="choisir un document..." required>
                @error('ouvrage')
                <div class="invalid-feedback">
                    veuillez remplir ce champs svp
                </div>
                @enderror
                </div>
                
                </div>
                    <button type="submit" class="btn btn-primary mt-4">Soumettre votre œuvres</button>
                    <button type="reset" class="btn btn-secondary mt-4">Annuler la soumission</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
