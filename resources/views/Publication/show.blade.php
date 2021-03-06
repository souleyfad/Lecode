@extends('admin.layout')

@section('contenu')
<div class="album bg-light">
        <div class="container pt-5">
            <div class="row">
                    <div class="col-md-2 offset-md-1 pt-4">
                    <img src="/storage/Couverture/couverture1.jpg" width="100%" height="225" alt="couverture">
                    </div>
                    <div class="col-md-5 offset-md-4 pt-4">
                        <h2 class="mb-2">{{ $publication->Titre }}</h2>
                        <h6 class="mb-2">de {{ $publication->Auteur }}</h6>
                        <p class="text-justify">{{ $publication->Resume }}</p>
                        <div class="row mt-3">
                            <div class="col-auto">
                            <form action="{{ route('publication.valide', $publication->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="ouvrage_id" value="{{ $publication->id }}">
                                @if($publication->valide == true)
                                <button type="submit" class="btn btn-success" disabled = 'disabled'>Valider pour l'éditon</button>
                                @else
                                <button type="submit" class="btn btn-success">Valider pour l'éditon</button>
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
            <hr>
        </div>
    </div>

@endsection