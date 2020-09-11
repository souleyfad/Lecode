@extends('layouts.app')

@section('content')
<div class="container row w-200 mt-5 pt-5">
    <div class="col-md-6 mt-5">
        <p class="mt-5 text-center ml-5" id="advice">
        Des conseils très utiles en vue de la bonne evoluton de votre œuvres sont 
        prevu  <a href="#">ici</a>. Mais si vous voulez, publier vous juste <a href="#">là</a> 
        </p>
    </div>
    <div class="col-md-6 mt-5 mb-3 ml-auto">
        <div class="mt-5">
            <div class="rounded" style="background-color : #3F704D; color: white">
                <div class="card-header">Publier votre ouvrage</div>

                <div class="card-body">
                    <form action="{{ route('publication.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="titre" class="col-md-4">Titre</label>
                        <input type="text" class="col-md-6 form-control @error('Titre') is-invalid @enderror" 
                        name="Titre" placeholder="entrez le titre" required>
                        @error('Titre')
                        <div class="invalid-feedback">{{ $errors->first('Titre')}}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="genre" class="col-md-4">Genre</label>
                        <div class="input-group col-md-6">
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
                    <div class="form-group row">
                        <label for="resume" class="col-md-4">Resumé</label>
                        <textarea name="Resume" id="resume" cols="10" rows="5"
         class="col-md-6 form-control @error('Resume') is-invalid @enderror" placeholder="Faites unrésumé" required></textarea>
                        @error('Resume')
                        <div class="invalid-feedback">{{ $errors->first('resume')}}</div>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="auteur" class="col-md-4">Auteur</label>
                        <input type="text" class="col-md-6 form-control @error('auteur') is-invalid @enderror" 
                        name="auteur" placeholder="nom complet de l'auteur" required>
                        @error('auteur')
                        <div class="invalid-feedback">{{ $errors->first('auteur')}}</div>
                        @enderror
                    </div>

                    <div class="custom-file">
                    <div class="form-group row">
                    <label for="ouvrage" class="col-md-4">Ouvrage</label>
                <input type="file" class="col-md-6 form-control @error('ouvrage') is-invalid @enderror" 
                name="ouvrage" id="ouvrage" placeholder="choisir un document..." required>
                @error('ouvrage')
                <div class="invalid-feedback">
                    veuillez remplir ce champs svp
                </div>
                @enderror
                </div>
                
                </div>
                    <button type="submit" class="btn btn-primary mt-4">Soumettre votre œuvres.</button>
                    <button type="reset" class="btn btn-secondary mt-4">Annuler la soumission.</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
