@extends('layouts.app')

@section('content')
<div class="album py-5 bg-light">
    <div class="container mt-5 pt-5">
        <div class="row mb-2 mt-5">
        @if($achats->count() !=0)
            Ma bibliothèque
            @foreach ($livres as $clef => $tableau1)
            @foreach ($tableau1 as $clef1 => $tableau2)
                @foreach($tableau2 as $key => $livre)
                <div class="col-md-3 ml-1 ih-item square effect4">
                <a href="{{ route('apercubiblio', $livre[0]) }}" class="presentation">
                <div class="card mb-4 shadow-sm ">
                    <img src="/storage/Couverture/{{ $livre[2] }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="couverture">
                    <div class="card-body">
                    <p class="card-text text-center" style="font-size: 15px">
                        {{ $livre[3] }} <br> 
                        <strong>   {{ $livre[1] }} <br></strong>
                    </p>
                    </div>
                </div>
                </a>
                </div>
                @endforeach
            @endforeach
            @endforeach
            
        @else
            Vous n'avez encore effectué aucun achat et donc vous disposez pas encore de bibliothèque merci.
        @endif
        </div>
    </div>
</div>
@endsection