@extends('layouts.app')

@section('content')
<div class="mt-3 pt-2">
<header class="py-5 mb-5 mt-5 pt-5" style="background-color: #3A675A;">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white text-center mt-5 mb-2">Amoureux des livres ? Vous êtes au bon endroit.</h1>
          <p class="lead mb-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. Id assumenda voluptate earum corporis facere quibusdam quisquam iste ipsa cumque unde nisi, totam quas ipsam.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>Ce que nous faisons</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <a class="btn btn-success btn-lg" href="{{ route('contact') }}">Contactez-nous par email</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Nos contacts</h2>
        <hr>
        <address>
          <strong>EasyEdition</strong>
          <br>3481 Melrose Place
          <br>Beverly Hills, CA 90210
          <br>
        </address>
        <address>
          <abbr title="Phone">Tel:</abbr>
          91555090
          <br>
          <abbr title="Email">E:</abbr>
          <a href="mailto:#">soulemanefadel@gmail.com</a>
        </address>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4 mb-5">
          <img class="img-circle rounded-circle" src="https://placehold.it/300x200" alt="">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
          <img class="img-circle rounded-circle" src="https://placehold.it/300x200" alt="">
          <div class="card">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
          <img class="img-circle rounded-circle" src="https://placehold.it/300x200" alt="">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</div>
@endsection