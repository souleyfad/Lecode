@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">
                <div class="bg-light text-center rounded-pill px-4 py-3 text-uppercase font-weight-bold">
                    Details de la commande.
                </div>
                </div>

                <div class="card-body">
                <p class="text-muted">
                    Passer votre commande ici en choisissant le mode de payement.
                </p>
                    <form action="{{ route('achat.store') }}" method="post">
                        @csrf
                    <div class="form-group">
                        <input type="radio" name="moyenPayement" value="TMoney" id="tog">
                        <label for="tog">TMoney</label>
                        <input type="radio" name="moyenPayement" value="Flooz" id="moov">
                        <label for="moov">Flooz</label>
                        <input type="radio" name="moyenPayement" value="Poste" id="poste">
                        <label for="poste">Poste</label>
                        <input type="radio" name="moyenPayement" value="Western Union" id="wu">
                        <label for="wu">Western Union</label>
                        @error('type')
                        <div class="invalid-feedback">{{ $errors->first('Titre')}}</div>
                        @enderror
                    </div>
                    <input type="hidden" value="{{ Cart::subtotal() }}" name="montant">
                    
                <div class="d-flex">
                <button type="submit" class="btn btn-primary ml-2">Valider la commande</button>
                <a href="{{ route('panier') }}" class="btn btn-secondary ml-5">Annuler la commande</a>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
