@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5">
        @if(Cart::count() > 0)
        <div class="table-responsive mt-5  pt-5">
            <table class="table" width="60">
                <thead>
                    <tr>
                        <th scope="col" class="border-0 bg-light">Ouvrage</th>
                        <th scope="col" class="border-0 bg-light">Titre</th>
                        <th scope="col" class="border-0 bg-light">Auteur</th>
                        <th scope="col" class="border-0 bg-light">Prix</th>
                        <th scope="col" class="border-0 bg-light">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Cart::content() as $ouvrage)
                        <tr>
                            <td scope="row" class="border-0">
                            <div class="p-2">
                            <img src="/storage/Couverture/{{ $ouvrage->model->Couverture }}" alt="cover" width="70" class="img-fluid rounded shadow-sm">
                            </div>
                            </td>
                            <td class="border-0 align-middle">
                            <a href="{{ route('panier.show',$ouvrage->rowId) }}">
                                {{ $ouvrage->model->Titre }}
                            </a>    
                            </td>
                            <td class="border-0 align-middle">
                                {{ $ouvrage->model->Auteur }}
                            </td>
                            <td class="border-0 align-middle">
                                {{ $ouvrage->model->prix }}
                            </td>
                            <td>
                            <form action="{{ route('panier.destroy', $ouvrage->rowId) }}" method="POST" style=" display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-trash pt-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
            <div class="row mt-4">
            <div class="col-12 alert alert-success mt-5 pt-4"><p class="text-center">votre panier est vide</p></div>
            </div>
        @endif
        <div class="card mb-4 pb-1 shadow-sm">
            <div class="d-flex pt-2">
                    <p class="card-text pl-2 mr-5">
                        Prix Total:<strong>{{ Cart::subtotal() }}</strong>
                    </p>
                <button type="submit" class="btn btn-primary ml-2">Valider la commande</button>
            </div>
    </div>
@endsection