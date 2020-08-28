@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-2">
<nav id="dash" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('admin.home') }}">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users') }}">
              <span data-feather="file"></span>
              Utilsateurs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('publication.store') }}">
              <span data-feather="shopping-cart"></span>
              Publications
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ouvrage.create') }}">
              <span data-feather="#"></span>
              Ouvrages
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Achats
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Actualités
            </a>
          </li>
        </ul>
    </div>
</nav>
</div>
<div class="col-10">
@if(session('message'))
                    <div class="alert alert-success"  role="alert">
                        {{ session('message') }}
                    </div>
                @endif
<main class="py-4">
            @yield('contenu')
        </main>
        </div>
</div>
@endsection
