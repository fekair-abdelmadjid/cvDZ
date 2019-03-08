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


                    <!--Begin cv table-->
                    <div class="row cvtable">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mon cv</h3>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Doomaine</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>

                                    </thead>

                                    <tbody>

                                    <tr>
                                        <th>{{$cvs->titre}}</th>
                                        <th>{{$cvs->domaine}}</th>
                                        <th>{{$cvs->created_at}}</th>
                                        <th>


                                            <form action="{{url('cvs/'.$cvs->id)}}" method="post">
                                                <a href="{{url('cvs/'.$cvs->id.'/edit')}}"
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

                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                    <!--End cv table-->


                    <!--Begin experience table-->
                    <div class="row cvtable">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mon experiences</h3>
                                    <a href="{{url('experiences/create')}}" class="btn btn-sm btn-default"
                                       style="float:right"><span
                                                class="glyphicon glyphicon-plus"></span></a>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <thead>
                                    <tr>
                                        <th>Poste</th>
                                        <th>Entreprise</th>
                                        <th>Date début</th>
                                        <th>Date de fin</th>
                                        <th>Actions</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($cvs->experiences as $value)
                                        <tr>
                                            <th>{{$value->titre}}</th>
                                            <th>{{$value->NomEntreprise}}</th>
                                            <th>{{$value->DateDebut}}</th>
                                            <th>{{$value->DateFin}}</th>
                                            <th>


                                                <form action="{{url('experiences/'.$value->id)}}" method="post">
                                                    <a href="{{url('experiences/'.$value->id.'/edit')}}"
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


                    <!--Begin formation table-->
                    <div class="row cvtable">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mon formations</h3>
                                    <a href="{{url('formations/create')}}" class="btn btn-sm btn-default"
                                       style="float:right"><span
                                                class="glyphicon glyphicon-plus"></span></a>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <thead>
                                    <tr>
                                        <th>Formation</th>
                                        <th>Etablissement</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($cvs->formations as $value)
                                        <tr>
                                            <th>{{$value->titre}}</th>
                                            <th>{{$value->Etablissement}}</th>
                                            <th>{{$value->Date}}</th>
                                            <th>{{$value->Description}}</th>
                                            <th>


                                                <form action="{{url('formations/'.$value->id)}}" method="post">
                                                    <a href="{{url('formations/'.$value->id.'/edit')}}"
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
                    <!--End formation table-->


                    <!--Begin Competences table-->
                    <div class="row cvtable">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mon Competences</h3>
                                    <a href="{{url('competences/create')}}" class="btn btn-sm btn-default"
                                       style="float:right"><span
                                                class="glyphicon glyphicon-plus"></span></a>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <thead>
                                    <tr>
                                        <th>Domaine de compétence</th>
                                        <th>Compétence</th>
                                        <th>maîtrise</th>
                                        <th>Actions</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($cvs->competences as $value)
                                        <tr>
                                            <th>{{$value->Domaine}}</th>
                                            <th>{{$value->titre}}</th>
                                            <th>{{$value->maitrise}}</th>
                                            <th>


                                                <form action="{{url('competences/'.$value->id)}}" method="post">
                                                    <a href="{{url('competences/'.$value->id.'/edit')}}"
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
                    <!--End Competences table-->


                    <!--Begin diplomes table-->
                    <div class="row cvtable">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mon diplomes</h3>
                                    <a href="{{url('diplomes/create')}}" class="btn btn-sm btn-default"
                                       style="float:right"><span
                                                class="glyphicon glyphicon-plus"></span></a>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <thead>
                                    <tr>
                                        <th>Diplome</th>
                                        <th>Etablissement</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($cvs->diplomes as $value)
                                        <tr>
                                            <th>{{$value->titre}}</th>
                                            <th>{{$value->Etablissement}}</th>
                                            <th>{{$value->Date}}</th>
                                            <th>


                                                <form action="{{url('diplomes/'.$value->id)}}" method="post">
                                                    <a href="{{url('diplomes/'.$value->id.'/edit')}}"
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
                    <!--End diplomes table-->


                    <!--Begin Projet table-->
                    <div class="row cvtable">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mon projets</h3>
                                    <a href="{{url('projets/create')}}" class="btn btn-sm btn-default"
                                       style="float:right"><span
                                                class="glyphicon glyphicon-plus"></span></a>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <thead>
                                    <tr>
                                        <th>Projet</th>
                                        <th>Presentation</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($cvs->projets as $value)
                                        <tr>
                                            <th>{{$value->titre}}</th>
                                            <th>{{$value->presentation}}</th>
                                            <th>


                                                <form action="{{url('projets/'.$value->id)}}" method="post">
                                                    <a href="{{url('projets/'.$value->id.'/edit')}}"
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
                    <!--End Projet table-->


                    <!--Begin Langues table-->
                    <div class="row cvtable">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mon langues</h3>
                                    <a href="{{url('langues/create')}}" class="btn btn-sm btn-default"
                                       style="float:right"><span
                                                class="glyphicon glyphicon-plus"></span></a>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <thead>
                                    <tr>
                                        <th>Langue</th>
                                        <th>Maitrise</th>
                                        <th>Actions</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($cvs->langues as $value)
                                        <tr>
                                            <th>{{$value->langue}}</th>
                                            <th>{{$value->maitrise}}</th>
                                            <th>


                                                <form action="{{url('langues/'.$value->id)}}" method="post">
                                                    <a href="{{url('langues/'.$value->id.'/edit')}}"
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
                    <!--End Langues table-->


                </div>

            </div>
        </div>
    </div>
    <br>
    <br>

@endsection