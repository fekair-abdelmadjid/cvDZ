@extends('layouts.app')
@section('pageTitle', 'Parcourir Offre')

@section('content')

    <!-- Begin Offre search -->
    <section class="search-offre">
        <div class="container">

            <div class="search">
                <h3>Filtre Offres d'emploi :</h3>
                <div class="row">

                    <form action="{{url('offre/search')}}" method="get" role="search">
                        {{csrf_field()}}

                        <div class="col-md-12 col-xs-12">
                            <div class="input-group">
                                <input type="text" class="form-control" name="offreTitre" placeholder="emploi titre...">
                                <span class="input-group-btn">
                                <button class="btn btn-success" type="submit">
                                 <span class="glyphicon glyphicon-search"></span>
                             </button>
                         </span>
                            </div>
                            <br>
                        </div>

                        <div class="input-group col-md-12 col-xs-12">
                            <div class="col-md-3 col-xs-12">

                                <select class="form-control" name="offreLieu">
                                    <option value="">tous les Wilaya</option>
                                    <option value="Adrar">01 Adrar</option>
                                    <option value="Chlef">02 Chlef</option>
                                    <option value="Laghouat">03 Laghouat</option>
                                    <option value="Oum El Bouaghi">04 Oum El Bouaghi</option>
                                    <option value="Batna">05 Batna</option>
                                    <option value="Bejaia">06 Béjaïa</option>
                                    <option value="Biskra">07 Biskra</option>
                                    <option value="Bechar">08 Béchar</option>
                                    <option value="Blida">09 Blida</option>
                                    <option value="Bouira">10 Bouira</option>
                                    <option value="Tamanrasset">11 Tamanrasset</option>
                                    <option value="Tebessa">12 Tébessa</option>
                                    <option value="Tlemcen">13 Tlemcen</option>
                                    <option value="Tiaret">14 Tiaret</option>
                                    <option value="Tizi Ouzou">15 Tizi Ouzou</option>
                                    <option value="Alger">16 Alger</option>
                                    <option value="Djelfa">17 Djelfa</option>
                                    <option value="Jijel">18 Jijel</option>
                                    <option value="Setif">19 Sétif</option>
                                    <option value="Saida">20 Saïda</option>
                                    <option value="Skikda">21 Skikda</option>
                                    <option value="Sidi Bel Abbes">22 Sidi Bel Abbès</option>
                                    <option value="Annaba">23 Annaba</option>
                                    <option value="Guelma">24 Guelma</option>
                                    <option value="Constantine">25 Constantine</option>
                                    <option value="Medea">26 Médéa</option>
                                    <option value="Mostaganem">27 Mostaganem</option>
                                    <option value="MSila">28 M'Sila</option>
                                    <option value="Mascara">29 Mascara</option>
                                    <option value="Ouargla">30 Ouargla</option>
                                    <option value="Oran">31 Oran</option>
                                    <option value="El Bayadh">32 El Bayadh</option>
                                    <option value="Illizi">33 Illizi</option>
                                    <option value="Bordj Bou Arreridj">34 Bordj Bou Arreridj</option>
                                    <option value="Boumerdes">35 Boumerdès</option>
                                    <option value="El Tarf">36 El Tarf</option>
                                    <option value="Tindouf">37 Tindouf</option>
                                    <option value="Tissemsilt">38 Tissemsilt</option>
                                    <option value="El Oued">39 El Oued</option>
                                    <option value="Khenchela">40 Khenchela</option>
                                    <option value="Souk Ahras">41 Souk Ahras</option>
                                    <option value="Tipaza">42 Tipaza</option>
                                    <option value="Mila">43 Mila</option>
                                    <option value="Ain Defla">44 Aïn Defla</option>
                                    <option value="Naama">45 Naâma</option>
                                    <option value="Ain Temouchent">46 Aïn Témouchent</option>
                                    <option value="Ghardaia">47 Ghardaïa</option>
                                    <option value="Relizane">48 Relizane</option>
                                </select>

                            </div>

                            <div class="col-md-3 col-xs-12">
                                <input type="text" name="offreNiveau" class="form-control" placeholder="Niveau"/>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- End Offre search -->

    <section class="offers-block">

        <div class="container">
            <div class="offers">
                @foreach($offres as $value)
                    <div class="row">
                        <div class="offre" id="offre">
                            <!-- Begin offre title -->
                            <div class="col-md-12">

                                <div class="col-md-9 col-sm-12">
                                    <div class="offre-title">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object"
                                                         src="{{asset('uploads/'.$value->logo)}}" alt="..."
                                                         width="64px" height="64px">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">{{$value->titre}}</h4>
                                                <p>{{$value->entrprise}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="offre-user text-center">
                                        <img class="img-circle" src="{{asset('uploads/'.$value->user->photo)}}" alt=""
                                             width="50px" height="50px">
                                        <br>
                                        <p>{{$value->user->name}}</p>
                                    </div>
                                </div>

                            </div>
                            <!-- End offre title -->

                            <!-- Begin offre Detail -->
                            <div class="col-md-12">
                                <div class="offre-detail">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$value->Wilaya}}</li>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$value->Date}}</li>
                                        <li><i class="fa fa-bookmark" aria-hidden="true"></i> {{$value->Niveau}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End offre Detail -->
                        </div>
                    </div>
                    <!-- Begin Script of  link to offre -->
                    <Script>
                     document.getElementById("offre").href="{{asset('offre/{$value->id}/presente')}}";
                    </Script>
                     <!-- End Script of  link to offre -->

                @endforeach

            </div>
        </div>
    </section>
@endsection