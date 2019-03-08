@extends('layouts.app')
@section('pageTitle', 'Mon cv')

@section('content')

    <section class="presente-offre">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="offre-present-title">
                        <div class="title-top">
                            <h1>{{$offre->titre}}</h1>
                        </div>
                        <ul class="list-unstyled">
                            <li>Nom de l'entrprise :<span class="span1">{{$offre->entrprise}}</span></li>
                            <li>Secteur d'activité :<span class="span2">{{$offre->Secteur}}</span></li>
                            <li>Lieu de travail :<span class="span3">{{$offre->Wilaya}}</span></li>
                            <li>Date d'expiration :<span class="span4">{{$offre->Date}}</span></li>
                            <li>Nombre de postes :<span class="span5">{{$offre->Nombre_post}}</span></li>
                            <li>Niveau de poste:<span class="span6">{{$offre->Niveau}}</span></li>
                            <li>Type de contrat :<span class="span7">{{$offre->Type_contrat}}</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offre-present-entreprise text-center">
                        <img src="{{asset('uploads/'.$offre->logo)}}" alt="" width="160px" height="100px"/>
                        <h4>Jade e-services</h4>
                    </div>
                </div>


                <div class="col-md-8">
                    <div class="offre-present-detail">
                        <div class="block">
                            <h2>Dossier</h2>
                            {{$offre->Dossier}}
                        </div>

                        <div class="block">
                            <h2>presentation</h2>
                            {{$offre->presentation}}
                        </div>

                        <div class="block">
                            <h2>Profil recherché</h2>
                            {{$offre->Profil_recherche}}
                        </div>

                        <div class="block">
                            <h2>Missions de poste</h2>
                            {{$offre->Missions_poste}}
                        </div>

                        <div class="block">
                            <h2>Adrasse </h2>
                            {{$offre->adrasse}}
                        </div>

                        <div class="block">
                            <h2>Téléphone</h2>
                            {{$offre->phone}}
                        </div>

                        <div class="block">
                            <h2>source </h2>
                            <a href="{{$offre->source}}" class="btn btn-md btn-success">source</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection