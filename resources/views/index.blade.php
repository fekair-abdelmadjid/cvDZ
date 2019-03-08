@extends('layouts.app')
@section('pageTitle', 'cvDZ')
@section('content')
<!--=================CAROUSELE START====================-->
<section class="presentationservice" id="presentationservice">

   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <!--Course-->
        <div class="item active">
            <img src="{{asset('uploads/Sitephoto/001.jpeg')}}" alt="Course">
            <div class="carousel-caption">
                <h1>Parcourir et sélectionner le cv approprié</h1>
                <p class="lead hidden-xs">Vous pouvez sur notre site Web pour obtenir le facteur approprié
                    pour votre travail via la fonction de recherche avancée sur notre site</p>
                    <a href="{{url('prcoruire')}}">
                        <div class="btn btn-primary">Parcourir Cv</div>
                    </a>
                </div>
            </div>

            <!--certfication-->
            <div class="item">
                <img src="{{asset('uploads/Sitephoto/002.jpeg')}}" alt="certfication">
                <div class="carousel-caption">
                    <h1>Créer votre cv</h1>
                    <p class="lead hidden-xs">Créez votre CV via notre site web avec tous les professionnels et
                        toutes les mesures reconnues pour créer du trafic en libre-service</p>
                        <a href="{{ route('login') }}">
                            <div class="btn btn-primary">Créer mon cv</div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>
    <!--=================End carousale====================-->


    <!--Begin section About-->
    <section class="about text-center">

        <div class="about-background">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 text-center">
                        <div class="about-info">
                            <h1>Sélectionner le cv approprié</h1>
                            <P class="lead">The atmosphere in Chania has a touch of Florence and Venice
                                The atmosphere in Chania has a touch of Florence and Venice</P>
                            </div>
                        </div>

                        <div class="col-md-4 hidden-xs">
                            <div class="about-photo">
                                <img class="img-responsive" src="{{asset('uploads/Sitephoto/about.png')}}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End section About-->




        <!--Begin section features-->
        <section class="features text-center">
            <div class="container">
                <h2>Nos fonctionnalités</h2>
                <div class="row">

                    <div class="col-lg-3 col-md-6">

                        <div class="feat">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <h4>Vue détaillée</h4>
                            <p>Notre site permet de présenter tous les détails de la cv (chemin éducation,
                                chemin d'expérience ...
                                présenter l'emplacement propriétaire de cv et les moyens de le contacter ....)
                                donc choisir le bon employé pour votre entreprise.</p>
                            </div>

                        </div>


                        <div class="col-lg-3 col-md-6">

                            <div class="feat">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                <h4>Gratuitement</h4>
                                <p>Un éditeur gratuit et simple et puissant pour fabriquer vous-même vos CV design gratuit
                                    et renouveler à tous égards et vous permet d'afficher gratuitement
                                    et cette possibilité que vous avez choisir pour un poste de travail.</p>
                                </div>

                            </div>


                            <div class="col-lg-3 col-md-6">

                                <div class="feat">
                                    <span class="glyphicon glyphicon-road"></span>
                                    <h4>Editeur simple</h4>
                                    <p>Vous pouvez créer votre CV avec aisance et professionnalisme de toutes les spécifications
                                        convenues de créer CV, et Il n'y a pas de complexité dans le traitement avec lui et vous
                                        traitez avec elle de la première vue.</p>
                                    </div>

                                </div>


                                <div class="col-lg-3 col-md-6">

                                    <div class="feat">
                                        <span class="glyphicon glyphicon-refresh"></span>
                                        <h4>Cv renouvelée</h4>
                                        <p>Vous pouvez renouveler votre CV à tout moment avec facilité afin que ce sera votre compagnon
                                            dans la formation scolaire ou professionnelle ou professionnelle pour augmenter vos chances
                                            d'obtenir un emploi.</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </section>
                        <!--End section features-->


                        <!--=================Begin carousale presentation====================-->
                        <section class="presentation hidden-sm hidden-xs">
                            <div class="container">
                                <h2>Les Dernier Cv</h2> <a href="{{url('prcoruire')}}">parcourir cv >></a>
                                <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel1" data-slide-to="1"></li>

                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">

                                        <!--Begin item active-->
                                        <div class="item active">

                                            <div class="row">
                                                @foreach($cv1 as $value)
                                                <div class="col-sm-3">
                                                    <div class="card">
                                                        <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                                        <div class="avatar">
                                                            <img src="{{asset('uploads/'.$value->user->photo)}}" alt=""/>
                                                        </div>
                                                        <div class="content">
                                                            <p>{{$value->user->name}}<br>
                                                                {{$value->titre}}</p>
                                                                <p>
                                                                    <a href="{{url('viewcv/'.$value->id)}}" class="btn btn-default"
                                                                       target="_blank">view cv</a>
                                                                   </p>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <img class="src-image" src="{{asset('uploads/'.$value->user->photo)}}"/>
                                                       @endforeach
                                                   </div>

                                               </div>
                                               <!--End item active-->


                                               <!--Begin item-->
                                               <div class="item">

                                                <div class="row">
                                                    @foreach($cv2 as $value)
                                                    <div class="col-sm-3">
                                                        <div class="card">
                                                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                                            <div class="avatar">
                                                                <img src="{{asset('uploads/'.$value->user->photo)}}" alt=""/>
                                                            </div>
                                                            <div class="content">
                                                                <p>{{$value->user->name}}<br>
                                                                    {{$value->titre}}</p>
                                                                    <p>
                                                                        <a href="{{url('viewcv/'.$value->id)}}" class="btn btn-default"
                                                                           target="_blank">view cv</a>
                                                                       </p>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <img class="src-image" src="{{asset('uploads/'.$value->user->photo)}}"/>
                                                           @endforeach
                                                       </div>
                                                   </div>
                                                   <!--Begin item-->
                                               </div>
                                           </div>
                                       </div>
                                   </section>
                                   <!--=================End carousale presentation====================-->


                                   <section class="notreobjectif text-center">

                                    <div class="objectif">
                                        <div class="container">
                                            <h1>Rédaction du CV parfait</h1>
                                            <p class="lead">Alors qu'un certain pourcentage des Algériens cherchent demandeurs d'emploi dans
                                                le but de produire un curriculum vitae régulier indépendamment, aidera nos clients à faire
                                                le travail de leurs rêves! Nous sommes la nouvelle force dans le monde professionnel en
                                                Algérie d'écrire un CV et notre objectif est votre succès!
                                            </p>
                                        </div>
                                    </div>

                                </section>




                                <section class="preinscription">

                                <div class="col-md-6 hidden-sm hidden-xs">
                                        <div class="preinscriptionphoto">
                                            <img src="{{asset('uploads/Sitephoto/preinscriptionphoto.png')}}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-6 text-center">
                                        <div class="preinscriptionlien">
                                            <h3>Enregistrer</h3>
                                            <p class="lead hidden-sm hidden-xs"> et conduire vos chances d'obtenir un emploi</p>
                                            <a href="{{ route('register') }}" class="btn btn-default btn-lg">S'inscrire</a>
                                        </div>
                                    </div>

                                </section>

                                <a href="#presentationservice" class="goTop">
                                    <span class="glyphicon glyphicon-chevron-up"></span></a>


                                    @endsection