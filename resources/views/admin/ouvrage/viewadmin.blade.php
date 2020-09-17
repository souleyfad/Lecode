@extends('admin.layout')

@section('contenu')
    <div class="container">

        <div class="row">
            <div class="col-auto">
                <a href="{{ route('ouvrage.create') }}" class="btn btn-success text-left ml-0">Nouvel ouvrage</a>
            </div>
            <div class="col-auto  offset-5">
            <form action="{{ route('adminouvrage.search') }}" method="get" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
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
    
        <div class="row mt-3">
	        @foreach($ouvrage as $ouvrage)
          <div class="col-lg-3 col-md-3 mb-0">
            <a href="#" class="presentation">
                <div class="card mb-4 shadow-sm">
                    <img src="/storage/Couverture/{{ $ouvrage->Couverture }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="couverture">
                    <span style="color: #edbb00;">{{ $ouvrage->commentaire->count() }} commentaire(s)</span>
                    <div class="card-body">
                    <p class="card-text" style="font-size: 15px">
                    {{ $ouvrage->Auteur }} <br> 
                    <strong style="color: #3F704D;">   {{ $ouvrage->Titre }} <br></strong>
                    {{ $ouvrage->genre->name }} <br>
                            {{ $ouvrage->prix }}<sup>F</sup>
                    </p>
                    </div>
                </div>
            </a>
            <div class="d-flex bd-highlight mb-1">
                <div class="p-2 bd-highlight">            
                    <a href="{{ route('adminouvrage.show',$ouvrage->id) }}" class="btn btn-secondary">Voir</a>
                </div>
                <div class="p-2 bd-highlight">
                    <form action="{{ route('ouvrage.destroy', $ouvrage->id) }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> supprrimer</button>
                    </form>
                </div>
            </div>
          </div>
 	        @endforeach
          
        </div>
    </div>
@endsection