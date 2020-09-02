@extends('layouts.app')

@section('content')
<div class="mt-3 pt-2">
<div class="row text-center mt-5 pt-5" style="margin-top: 25%; background-image: url('images/bg1.jpg');">
<aside class="mt-5  rounded mb-4 pt-1" style="margin-left: 25%; width:50%; background: rgba(0, 0, 0, 0.3)">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col text-center">
                <h5 class="text-warning">Contactez nous</h5>
                <p class="lead text-warning">Pour tous vos soucis avec notre plateforme
                    ou pour plus d'informations, contactez au +228 91555090 ou un email ici</p>
            </div>
        </div>
             <div class="text-center text-warning">
                  <h6>votre message</h6><br>
            </div>
                <form action="{{ route('contact.store') }}" method="POST" class="pb-2">
                    @csrf
                    <div class="form-group">
                    <br><label for="nom" class="text-warning">nom : </label><br>
                    <input type="text" name="nom" id="nom" size="50">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-warning">votre email : </label><br>
                            <input type="email" name="email" id="email" size="50">
                    </div>
                    <div class="form-group">
                        <label for="message" class="text-warning">votre message : </label><br>
                            <textarea name="message" id="message" cols="50" rows="5">
                            </textarea>
                    </div>
                    <button class="btn btn-primary btn-block mb-5 pb-3 " type="submit">Envoyer</button>
                </form>
            </div>
</aside>
</div>
</div>
@endsection