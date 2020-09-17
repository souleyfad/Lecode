@extends('admin.layout')

@section('contenu')
    <div class="container mt-5">
        <div class="card">
                <div class="card-header">Ajouter un genre</div>

                <div class="card-body">
                    <form action="{{ route('genre.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                        name="name" placeholder="entrez le genre" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $errors->first('name')}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug">slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                        name="slug" placeholder="ecrivez un slug" required>
                        @error('slug')
                        <div class="invalid-feedback">{{ $errors->first('slug')}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Enregistrer</button>
                    <button type="reset" class="btn btn-secondary mt-4">Annuler</button>
                    </form>
                </div>
        </div>

        
    </div>
@endsection