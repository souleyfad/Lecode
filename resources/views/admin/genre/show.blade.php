@extends('admin.layout')

@section('contenu')
    <div class="container">

        <div class="row">
            <div class="col-auto ">
                {{ $genre->name }}
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