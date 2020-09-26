@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row mt-5">
        Ma bibliothèque
        <div class="album py-5 bg-light">
            <div class="container">

            <div class="row mb-2">
            @foreach ($livres as $clef => $livre)
            <div class="card mb-4 shadow-sm">
                    <img src="/storage/Couverture/{{ $livre[1] }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="couverture">
                    <div class="card-body">
                    <p class="card-text text-center" style="font-size: 15px">
                        {{ $livre[2] }} <br> 
                        <strong>   {{ $livre[0] }} <br></strong>
                    </p>
                    </div>
                </div>
            @endforeach
            </div>
            </div>
        </div> 
    </div>
</div>
@endsection
<div class="a_supprimer"> @foreach($livre as $caracteristique => $valeur)
                    {{ $caracteristique }} : {{ $valeur }} <br>
               <br>
               @endforeach</div>