@extends('layouts.app')

@section('content')
<div class="container">
    <section class="jumbotron text-center mt-5">
    <div class="container">
      <h1>Tout vos livres</h1>
      <p class="lead text-muted">Nous vous permettons d'avoir accès à tous les livres de votre choix et plus encore</p>
      <p>

      <div class="dropdown">
        <button class="btn btn-primary my-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rechercher un livre
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <form action="{{ route('ouvrage.search') }}" method="get" class="dropdown-item d-flex mr-3 mt-5">
            <div class="form-group mb-0 mr-1">
              <input type="text" name="indice" class="form-control" value="{{ request()->indice ?? '' }}>
            </div>
            <button type="submit" class="btn btn-info">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
            </svg>
            </button>
          </form>
        </div>
      </div>

        <a href="{{ route('panier') }}" class="btn btn-secondary my-2">Consulter son panier</a>
      </p>
    </div>
  </section>

                @if(request()->input('indice'))
                <div class="alert alert-success pt-2"  role="alert">
                        {{ $ouvrage->total() }} œuvres trouvé pour votre recherche
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                @endif
                <div class="row">
	        @foreach($ouvrage as $ouvrage)
          <div class="col-lg-3 col-md-3 mb-4">
            <a href="{{ route('ouvrage.show',$ouvrage->id) }}" class="presentation">
                <div class="card mb-4 shadow-sm">
                    <img src="/storage/Couverture/{{ $ouvrage->Couverture }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="couverture">
                    <div class="card-body">
                    <p class="card-text" style="font-size: 15px">
                    {{ $ouvrage->Auteur }} <br> 
                    <strong>   {{ $ouvrage->Titre }} <br></strong>
                        {{ $ouvrage->Genre->name }} <br>
                            {{ $ouvrage->prix }}<sup>F</sup>
                    </p>
                    </div>
                </div>
               </a>
          </div>
 	        @endforeach
        </div>
  

      
</div>
@endsection