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
<script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js') }}" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css') }}" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <header class=" fixed-top">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-0">
          <div class="container">
                  <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/monlogo.png') }}" class="logo" alt="le logo" 
                    style=" height : 100px; width : 100px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="search-box">
                          <form action="{{ route('ouvrage.search') }}" method="get" style="padding-bottom :200px;">
                            @csrf
                            <input class="search-txt" type="text"  name="indice" value="{{ request()->indice ?? '' }}" placeholder="Tapez votre recherche">
                            <button type="submit" href="" class="search-btn">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                            </svg>
                            </button>
                      </form>
                    </div>
                  <div class="collapse navbar-collapse w-100" id="" style="font-size: 18px">
                      <!-- Right Side Of Navbar -->
                    <!--pour on ne sait jamais{{ __('Login') }}  {{ __('Register') }} 
                    {{ __('Logout') }} {{ __('Forgot Your Password?') }} -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item rounded" style="background-color : #edbb00;">
                                    <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nom }} <span class="caret"></span>
                                </a>
<!--div class="a supprimer"><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Se deconnecter
                                    </a>
</div-->
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Se deconnecter
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-md navbar-light shadow-sm mt-0 pt-0">
            <div class="collapse navbar-collapse" id="lanavbar" style="font-size: 18px; background-color : #3F704D;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav row" style="font-size: 20px">
                        <li class="nav-item col-auto">
                            <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li class="nav-item col-auto">
                            <a class="nav-link" href="{{ route('ouvrage') }}">Librairie</a>
                        </li>
                        <li class="nav-item col-auto">
                            <a class="nav-link" href="{{ route('aboutus') }}">A propos de nous</a>
                        </li>
                        <li class="nav-item col-auto">
                            <a class="nav-link" href="{{ route('contact') }}">Contactez nous</a>
                        </li>
                        <li class="nav-item col-auto">
                            <a class="nav-link" href="{{ route('publication.create') }}">
                            Publier-vous</a>
                        </li>
                        <li class="nav-item rounded col-auto" style="background-color : #edbb00;">
                        <a class="nav-link" href="{{ route('panier') }}">
                        <div class="panier">
                            <span style="  display : inline-block ">mon panier</span>
                            <svg width="1em" height="1em" style="  display : inline-block " viewBox="0 0 16 16" class="bi bi-cart-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                            <span class="badge badge-pill badge-dark" style="  display : inline-block ">{{ Cart::count() }}</span>
                            </div>
                        </a>  
                        </li>
                </ul>
                </div>
              </nav>
  
  </header>
            
                
        <main class="py-4">
        @if(session('message'))
                    <div class="alert alert-success mt-5 pt-5"  role="alert">
                        {{ session('message') }}
                    </div>
                @endif

            @yield('content')
        </main>
        <!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">
<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3 dark-grey-text">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">Qui Sommes Nous</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
        consecteturadipisicing elit.</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Nos produits</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a class="dark-grey-text" href="{{ route('ouvrage') }}">Ouvrages</a>
      </p>
      <p>
        <a class="dark-grey-text" href="{{ route('ouvrage') }}">Ouvrages</a>
      </p>
      <p>
        <a class="dark-grey-text" href="{{ route('ouvrage') }}">Ouvrages</a>
      </p>
      <p>
        <a class="dark-grey-text" href="{{ route('ouvrage') }}">Autres</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Liens important</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a class="dark-grey-text" href="{{ route('panier') }}">Mon panier</a>
      </p>
      <p>
        <a class="dark-grey-text" href="{{ route('publication.create') }}">Publiez-vous</a>
      </p>
      <p>
        <a class="dark-grey-text" href="{{ route('ouvrage') }}">Acceder à vos livres</a>
      </p>
      <p>
        <a class="dark-grey-text" href="#!">Aide</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <i class="fas fa-home mr-3"></i> Adresse</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> emails@example.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> +228 91555090</p>
      <p>
        <i class="fas fa-print mr-3"></i> +228 92874317</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
  <a class="dark-grey-text" href="https://mdbootstrap.com/"> EasyEdition</a>
</div>
<!-- Copyright -->

    </div>

</body>
</html>
