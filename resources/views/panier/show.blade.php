<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EasyEdition</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js') }}" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js') }}" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('bootstrap/js/jquery.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css') }}" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">
                <div class="bg-light text-center rounded-pill px-4 py-3 text-uppercase font-weight-bold">
                    details de la commande
                </div>
                </div>

                <div class="card-body">
                <p class="text-muted">
                    Passer votre commande ici vous pouvez avoir uniquement le format numerique ou et le
                    format numerique et le format papier.
                </p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-betwen py-4 border-bottom">
                            <strong class="text-muted">Prix numerique unique : </strong><strong class="mr-2">{{ getPrice($ouvrage->prix) }}</strong>
                        </li>
                        <li class="d-flex justify-content-betwen py-4 border-bottom">
                            <strong class="text-muted">Prix Livre numerique et impression : </strong><strong class="mr-2">{{ getPrice($imprime) }}</strong>
                        </li>
                </ul>
                <div class="d-flex">
                <button type="submit" class="btn btn-primary ml-2">Valider la commande</button>
                <a href="{{ route('accueil') }}" class="btn btn-secondary ml-5">Annuler la commande</a>
      
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
