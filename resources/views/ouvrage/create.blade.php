@extends('admin.layout')

@section('contenu')
    <div class="container mt-5">
        <div class="card">
                <div class="card-header">Enregistrer un nouvel ouvrage</div>

                <div class="card-body">
                    <form action="{{ route('ouvrage.store') }}" method="post" enctype="multipart/form-data">
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
                        name="Auteur" placeholder="nom complet de l'auteur" required>
                        @error('auteur')
                        <div class="invalid-feedback">{{ $errors->first('auteur')}}</div>
                        @enderror
                    </div>

                    <div class="custom-file">
                    <div class="form-group">
                    <label for="couverture">Couverture</label>
                <input type="file" class="form-control @error('Couverture') is-invalid @enderror" 
                name="Couverture" id="couverture" placeholder="choisir la couverture" required>
                @error('Couverture')
                <div class="invalid-feedback">
                    veuillez remplir ce champs svp
                </div>
                @enderror
                </div>

                    <div class="custom-file">
                    <div class="form-group">
                    <label for="ouvrage">Ouvrage</label>
                <input type="file" class="form-control @error('ouvrage') is-invalid @enderror" 
                name="ouvrage" id="ouvrage" placeholder="choisir un document..." required>
                @error('ouvrage')
                <div class="invalid-feedback">
                    veuillez remplir ce champs svp
                </div>
                @enderror
                </div>

                <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="number" class="form-control @error('prix') is-invalid @enderror" 
                        name="prix" placeholder="La valeur monetaire de l'ouvrage" required>
                        @error('prix')
                        <div class="invalid-feedback">{{ $errors->first('prix')}}</div>
                        @enderror
                    </div>
                
                </div>
                    <button type="submit" class="btn btn-primary mt-4">Enregistrer</button>
                    <button type="reset" class="btn btn-secondary mt-4">Annuler</button>
                    </form>
                </div>
        </div>
    </div>
@endsection