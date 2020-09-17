@extends('admin.layout')

@section('contenu')
       <iframe src="{{url('storage/Manuscrits/'.$publication->ouvrage)}}" frameborder="0"></iframe>
@endsection