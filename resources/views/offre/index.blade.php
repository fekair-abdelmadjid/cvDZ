@extends('layouts.app')
@section('pageTitle', 'Mon cv')

@section('content')


    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="{{asset('uploads/'.Auth::user()->photo)}}" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->


                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{Auth::user()->name}}
                        </div>
                        <div class="profile-usertitle-job">
                            {{Auth::user()->cvs->titre}}
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->


                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
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
                            <li>
                                <a href="{{url('users/edit')}}">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Paramaetre de Compte </a>
                            </li>
                            <li>
                                <a href="{{url('viewcv/'.Auth::user()->cvs->id)}}" target="_blank">
                                    <i class="glyphicon glyphicon-eye-open"></i> view mon cv</a>
                            </li>
                            <li><a href="#"><i class="glyphicon glyphicon-home"></i> Mon Offre</a></li>
                            <li ><a href="{{url('offre/create')}}"><span class="glyphicon glyphicon-plus"></span> Ajouter Offre</a></li>
                        </ul>
                    </div>
                    <!-- END MENU -->


                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">

                    <!--Begin experience table-->
                    <div class="row cvtable">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mon Offres</h3>
                                    <a href="{{url('offre/create')}}" class="btn btn-sm btn-default"
                                       style="float:right"><span
                                                class="glyphicon glyphicon-plus"></span></a>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Entreprise</th>
                                        <th>Date </th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($offres as $value)
                                        <tr>
                                            <th>{{$value->titre}}</th>
                                            <th>{{$value->entrprise}}</th>
                                            <th>{{$value->Date}}</th>
                                            <th>


                                                <form action="{{url('offre/'.$value->id)}}" method="post">
                                                    <a href="{{url('offre/'.$value->id.'/edit')}}"
                                                       class="btn btn-xs btn-primary"><span
                                                                class="glyphicon glyphicon-cog"></span></a>
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-xs btn-danger"><span
                                                                class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                </form>

                                            </th>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                    <!--End experience table-->

                </div>

            </div>
        </div>
    </div>
    <br>
    <br>

@endsection