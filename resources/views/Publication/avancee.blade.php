@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row mt-5">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step col-xs-6"> 
            <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
            <p class="mr-5"><small>Envoi bien effectué</small></p>
        </div>
        <div class="stepwizard-step col-xs-6">
            @if($publication->valide == 1) 
            <a href="#step-2" type="button" class="btn btn-success btn-circle">2</a>
            <p class="mr-5"><small>Votre œuvre a éte choisi et vous recevrez des emails concernant votre maisn d'edition</small></p>
            @else
            <a href="#step-2" type="button" class="btn btn-secondary btn-circle">2</a>
            <p class="mr-5"><small>Votre œuvre n'a encore éte choisi </small></p>
            @endif
        </div>
        </div>
    </div>
    </div>
    <div class="row mt-5">
                    <div class="col-md-2 offset-md-1 pt-4">
                    <img src="/storage/Couverture/couverture1.jpg" width="100%" height="225" alt="couverture">
                    </div>
                    <div class="col-md-5 offset-md-4 pt-4">
                        <h2 class="mb-2">{{ $publication->Titre }}</h2>
                        <h6 class="mb-2">de {{ $publication->Auteur }}</h6>
                        <p class="text-justify">{{ $publication->Resume }}</p>
                        <div class="row mt-3">
                            <div class="col-auto">
                            <form action="#" method="post">
                                @csrf
                                <input type="hidden" name="ouvrage_id" value="{{ $publication->id }}">
                                @if($publication->valide == true)
                                <button type="submit" class="btn btn-success" disabled = 'disabled'>Déja valide</button>
                                @else
                                <button type="submit" class="btn btn-secondary">En cours de validation</button>
                                @endif
                            </form>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('apercu', $publication->id) }}" class="btn btn-primary">
                                    Apercu du manuiscrit
                                </a>
                            </div>
                        </div>
                        <!--iframe src="{{url('storage/Manuscrits/'.$publication->ouvrage)}}" frameborder="0"></iframe-->
                    </div> 
            </div>
</div>
@endsection