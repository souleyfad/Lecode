@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div id="diapo" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="row">
                        <div class="col-6" style="padding-bottom : 200px; font-size: 50px; color : #edbb00">
                            <p style="font-size: 20px">Le Lorem Ipsum est simplement du faux texte employé dans la
                            composition et la mise en page avant impression. Le Lorem Ipsum est le faux 
                            texte standard de l'imprimerie depuis les années 1500, quand un imprimeur </p>
                        </div>
                        <div class="col-6">
                            
                        </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="padding-bottom : 30px; color : #edbb00">
                        <div class="row">
                        <div class="col-6" style="padding-bottom : 200px; font-size: 50px; color : #edbb00">
                            <p style="font-size: 20px">Le Lorem Ipsum est simplement du faux texte employé dans la
                            composition et la mise en page avant impression. Le Lorem Ipsum est le faux 
                            texte standard de l'imprimerie depuis les années 1500, quand un imprimeur </p>
                        </div>
                        <div class="col-6">
                            
                        </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block " style="padding-bottom : 30px; color : #edbb00">
                        <div class="row">
                        <div class="col-6" style="padding-bottom : 200px; font-size: 50px; color : #edbb00">
                            <p style="font-size: 20px">Le Lorem Ipsum est simplement du faux texte employé dans la
                            composition et la mise en page avant impression. Le Lorem Ipsum est le faux 
                            texte standard de l'imprimerie depuis les années 1500, quand un imprimeur </p>
                        </div>
                        <div class="col-6">
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <article class="col-md-6 p-3 text-center" style="display : inline-block">
                <div class="text-center">
                    <h5 class="font-weight-bold lead mb-3">Avec nous decouvrez plus encore</h5>
                </div>
                
                <div class="row container mr-5 ml-5">
                    <div class="col-6">
                    <a href="{{ route('publication.create') }}" class="d-flex flex-column bd-highlight mb-3" id="pub">
                            <div class="p-2 bd-highlight">
                                <img src="{{ asset('images/livres.png') }}" class="livres" alt="publie" 
                                style=" height : 120px; width : 120px">
                            </div>
                            <div class="p-2 bd-highlight text-center">Publier votre livre</div>
                        </a>
                    </div>
                    <div class="col-6">
                    <a href="{{ route('publication.create') }}" class="d-flex flex-column bd-highlight mb-3" id="pub">
                            <div class="p-2 bd-highlight">
                                <img src="{{ asset('images/shopping.png') }}" class="shopping" alt="achat" 
                                style=" height : 120px; width : 120px">
                            </div>
                            <div class="p-2 bd-highlight text-center">Remplissez votre <br> panier ici</div>
                        </div>
                    </a>
                </div>
                <p class="text-justify">Le Lorem Ipsum est simplement du faux texte employé dans la
                 composition et la mise en page avant impression. Le Lorem Ipsum est le faux 
                 texte standard de l'imprimerie depuis les années 1500, quand un imprimeur 
                 anonyme assembla ensemble des morceaux de texte pour réaliser un livre 
                 spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, 
                 mais s'est aussi adapté à la bureautique informatique, sans que son contenu
                  n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la 
                  vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus
                   récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                </p>
            </article>
            <aside class="col-md-6 p-3 text-center">
            <div class="row">
            <img src="{{ asset('images/aside.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="row">
                <div class="text-center">
                    <h5 class="font-weight-bold lead mb-3">Quelques conseils afin de vous aidez dans l'ecriture et la plublication de votre manuiscrit</h5>
                </div>
                <p class="text-justify">Le Lorem Ipsum est simplement du faux texte employé dans la
                 composition et la mise en page avant impression. Le Lorem Ipsum est le faux 
                 texte standard de l'imprimerie depuis les années 1500, quand un imprimeur 
                 anonyme assembla ensemble des morceaux de texte pour réaliser un livre 
                 spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, 
                </p>
            </div>
            </div>
            </aside>
            
        </div>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">  
        <h4 class="lead text-center" id="advice">Queleques de nos recentes œuvres</h4>

        <div class="album py-5 bg-light">
            <div class="container">

            <div class="row mb-2">
                @foreach($ouvrage as $ouvrage)
                <div class="col-md-2 ml-1 ih-item square effect4">
                <a href="{{ route('ouvrage.show',$ouvrage->id) }}" class="presentation">
                <div class="card mb-4 shadow-sm">
                    <img src="/storage/Couverture/{{ $ouvrage->Couverture }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="couverture">
                    <div class="card-body">
                    <p class="card-text text-center" style="font-size: 15px">
                        {{ $ouvrage->Auteur }} <br> 
                        <strong>   {{ $ouvrage->Titre }} <br></strong>
                        {{ $ouvrage->Genre->name }} <br>
                            {{ $ouvrage->prix }}<sup>F</sup>
                    </p>
                    </div>
                </div>
               </a>
                </div>
                @endforeach
            </div>
            </div>
        </div>        
   </div>
@endsection