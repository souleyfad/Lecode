@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">

    <div class="row">

      <div class="col-lg-3 mt-5 pt-4">

        <h3 class="my-0" style="background :  #3F704D; color: white; ">EasyEdition</h3>
        <div class="list-group" id="genre">
        @foreach($genre as $genre)
          <a href="{{ route('ouvrage', ['Genre_id' => $genre->id]) }}" class="list-group-item">{{ $genre->name }}</a>
          @endforeach
	        <a href="#" class="list-group-item">Maisons d'editions</a>
	        <a href="#" class="list-group-item">Auteur</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9 mt-5 pt-4">
      <div class="container">
      <section class="jumbotron text-center">
      <div class="container">
        <h1>Tout vos livres</h1>
        <p class="lead text-muted">Nous vous permettons d'avoir accès à tous les livres de votre choix et 			plus encore</p>
        <div class="row">
        <div class="col-lg-6">
        <div class="dropdown">
          <button class="btn btn-primary my-2 dropdown-toggle" type="button" id="dropdownMenuButton" 			data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Rechercher un livre
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <form action="{{ route('ouvrage.search') }}" method="get" class="dropdown-item d-flex mr-3 mt-5">
              @csrf
              <div class="form-group mb-0 mr-1">
                <input type="text" name="indice" class="form-control" value="{{ request()->indice ?? '' }}">
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
        </div>
        <div class="col-lg-6">
          <a href="{{ route('panier') }}" class="btn btn-secondary my-2">Consulter son panier</a>
        </div>
        </div>
      </div>
    </section>

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
                    {{ $ouvrage->genre->name }} <br>
                            {{ $ouvrage->prix }}<sup>F</sup>
                    </p>
                    </div>
                </div>
               </a>
          </div>
 	        @endforeach
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection