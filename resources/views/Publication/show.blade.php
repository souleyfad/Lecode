@extends('admin.layout')

@section('contenu')
    <div class="mt-5">
    <h3>Titre: </h3>{{ $publication->Titre }}
        <h3>Auteur: </h3>{{ $publication->Auteur }}
        <h3>Resume :</h3>
        <p> {{ $publication->Resume }} </p>
        <hr>
        
        <iframe src="{{url('storage/Manuscrits/'.$publication->ouvrage)}}" frameborder="0"></iframe>
    </div>
@endsection