@extends('layouts.app')
@section('pageTitle', 'Paramaetre de Compte')



@section('content')

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="{{asset('uploads/'.$infouser->photo)}}" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{$infouser->name}}
                        </div>
                        <div class="profile-usertitle-job">
                            {{Auth::user()->cvs->titre}}
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->

                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li>
                                <a href="{{url('cvs')}}">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Mon cv </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                            class="glyphicon glyphicon-plus"></span> Ajouter <span class="caret"></span></a>
                                <ul class="dropdown-menu forAnimate" role="menu">
                                    <li><a href="{{url('experiences/create')}}">Ajouter Expérience</a></li>
                                    <li><a href="{{url('formations/create')}}">Ajouter Formation</a></li>
                                    <li><a href="{{url('competences/create')}}">Ajouter Compétence</a></li>
                                    <li><a href="{{url('diplomes/create')}}">Ajouter Diplôme</a></li>
                                    <li><a href="{{url('projets/create')}}">Ajouter Projet</a></li>
                                    <li><a href="{{url('langues/create')}}">Ajouter Langue</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="{{url('users/edit')}}">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Paramaetre de Compte </a>
                            </li>
                            <li>
                                <a href="{{url('viewcv/'.Auth::user()->cvs->id)}}" target="_blank">
                                    <i class="glyphicon glyphicon-eye-open"></i> view mon cv</a>
                            </li>
                            <li>
                                <a href="{{url('offre')}}">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Mon Offre </a>
                            </li>
                            <li>
                                <a href="{{url('offre/create')}}">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    Ajouter Offre </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">

                    <!--Begin Content-->
                    <div class="Paramaetre_Compte formulaire2">
                        <h1 class="text-center"><span class="glyphicon glyphicon-cog"></span> Paramaetre de Compte</h1>
                        <br><br>
                        <div class="container ParamaetreCompte">
                            <form action="{{url('users/'.$infouser->id)}}" class="form-horizontal" method="post"
                                  enctype="multipart/form-data">

                                <input type="hidden" name="_method" value="PUT">
                                {{csrf_field()}}

                                <div class="form-group form-group-lg">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10 col-md-4">
                                        <h4><span class="glyphicon glyphicon-user"></span> Données Personnelles</h4>
                                    </div>
                                </div>


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('FamilyName')) has-error @endif">
                                    <label class="col-sm-2 control-label">Nom : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="text" name="FamilyName" class="form-control"
                                               value="{{$infouser->FamilyName}}"/>
                                        @if($errors->get('FamilyName'))
                                            @foreach($errors->get('FamilyName') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('FirstName')) has-error @endif">
                                    <label class="col-sm-2 control-label">Prénom : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="text" name="FirstName" class="form-control"
                                               value="{{$infouser->FirstName}}"/>
                                        @if($errors->get('FirstName'))
                                            @foreach($errors->get('FirstName') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('name')) has-error @endif">
                                    <label class="col-sm-2 control-label">Username : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="text" name="name" class="form-control"
                                               value="{{$infouser->name}}"/>
                                        @if($errors->get('name'))
                                            @foreach($errors->get('name') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('email')) has-error @endif">
                                    <label class="col-sm-2 control-label">Email : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="email" name="email" class="form-control"
                                               value="{{$infouser->email}}"/>
                                        @if($errors->get('email'))
                                            @foreach($errors->get('email') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('Phone')) has-error @endif">
                                    <label class="col-sm-2 control-label">Téléphone : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="number" name="Phone" class="form-control"
                                               value="{{$infouser->Phone}}"/>
                                        @if($errors->get('Phone'))
                                            @foreach($errors->get('Phone') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('DateBirth')) has-error @endif">
                                    <label class="col-sm-2 control-label">Date Naissance : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="date" name="DateBirth" class="form-control"
                                               value="{{$infouser->DateBirth}}"/>
                                        @if($errors->get('DateBirth'))
                                            @foreach($errors->get('DateBirth') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin Type of Formation-->
                                <div class="form-group form-group-lg @if($errors->get('Wilaya')) has-error @endif">
                                    <label class="col-sm-2 control-label">Wilaya : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <select name="Wilaya" class="form-control">
                                            <option value="{{$infouser->Wilaya}}">{{$infouser->Wilaya}}</option>
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
                                        @if($errors->get('Wilaya'))
                                            @foreach($errors->get('Wilaya') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End Type of Formation-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('Adresse')) has-error @endif">
                                    <label class="col-sm-2 control-label">Adresse : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="text" name="Adresse" class="form-control"
                                               value="{{$infouser->Adresse}}"/>
                                        @if($errors->get('Adresse'))
                                            @foreach($errors->get('Adresse') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('PathFac')) has-error @endif">
                                    <label class="col-sm-2 control-label">Facebook : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="text" name="PathFac" class="form-control"
                                               value="{{$infouser->PathFac}}"/>
                                        @if($errors->get('PathFac'))
                                            @foreach($errors->get('PathFac') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('Pathtwi')) has-error @endif">
                                    <label class="col-sm-2 control-label">Twiter : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="text" name="Pathtwi" class="form-control"
                                               value="{{$infouser->Pathtwi}}"/>
                                        @if($errors->get('Pathtwi'))
                                            @foreach($errors->get('Pathtwi') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('Pathgoo')) has-error @endif">
                                    <label class="col-sm-2 control-label">Google+ : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="text" name="Pathgoo" class="form-control"
                                               value="{{$infouser->Pathgoo}}"/>
                                        @if($errors->get('Pathgoo'))
                                            @foreach($errors->get('Pathgoo') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->

                                <!--Begin nom-->
                                <div class="form-group form-group-lg @if($errors->get('photo')) has-error @endif">
                                    <label class="col-sm-2 control-label">Votre photo : </label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="file" name="photo" class="photo"/>
                                        @if($errors->get('photo'))
                                            @foreach($errors->get('photo') as $value)
                                                <li>{{$value}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--End nom-->


                                <!--Begin nom-->
                                <div class="form-group form-group-lg">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10 col-md-4">
                                        <button type="submit" name="modifer" class="btn btn-success btn-md"><span
                                                    class="glyphicon glyphicon-saved"></span> Modifer
                                        </button>
                                    </div>
                                </div>
                                <!--End nom-->

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

@endsection