@extends('admin.layout')

@section('contenu')
    <div class="mt-5">
    <h3>Identité:</h3> {{ $user->nom }} {{ $user->prenom }} 
    <h3>Pseudo:</h3>    {{ $user->pseudo }}
    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Modifier</a>
    </div>
@endsection