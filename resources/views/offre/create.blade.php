@extends('layouts.app')
@section('pageTitle', 'Ajouter Offre')

@section('content')


    <div class="container formulaire">
        <div class="row">
            <h1 class="text-center">Ajouter un Offre</h1>
            <form action="{{url('offre')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <!--Begin Title of Formation-->
                  <div class="form-group form-group-lg @if($errors->get('titre')) has-error @endif">
                    <label class="col-sm-2 control-label">Titre : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="titre" class="form-control"/>
                        @if($errors->get('titre'))
                            @foreach($errors->get('titre') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('entrprise')) has-error @endif">
                    <label class="col-sm-2 control-label">Nom de l'entrprise : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="entrprise" class="form-control"/>
                        @if($errors->get('entrprise'))
                            @foreach($errors->get('entrprise') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Lieu')) has-error @endif">
                    <label class="col-sm-2 control-label">Lieu de travail : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Lieu" class="form-control"/>
                        @if($errors->get('Lieu'))
                            @foreach($errors->get('Lieu') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Date')) has-error @endif">
                    <label class="col-sm-2 control-label">Date d'expiration : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="date" name="Date" class="form-control"/>
                        @if($errors->get('Date'))
                            @foreach($errors->get('Date') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Nombre')) has-error @endif">
                    <label class="col-sm-2 control-label">Nombre de postes : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Nombre" class="form-control"/>
                        @if($errors->get('Nombre'))
                            @foreach($errors->get('Nombre') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Niveau')) has-error @endif">
                    <label class="col-sm-2 control-label">Niveau d'étude : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Niveau" class="form-control"/>
                        @if($errors->get('Niveau'))
                            @foreach($errors->get('Niveau') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Type')) has-error @endif">
                    <label class="col-sm-2 control-label">Type de contrat : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Type" class="form-control"/>
                        @if($errors->get('Type'))
                            @foreach($errors->get('Type') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin presentation of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Dossier')) has-error @endif">
                    <label class="col-sm-2 control-label">Dossier : </label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="Dossier" rows="5" cols="30"
                                  class="form-control">{{old('Dossier')}}</textarea>
                        @if($errors->get('Dossier'))
                            @foreach($errors->get('Dossier') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End presentation of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Logo')) has-error @endif">
                    <label class="col-sm-2 control-label">Logo : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="file" name="Logo" class="photo"/>
                        @if($errors->get('Logo'))
                            @foreach($errors->get('Logo') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <div class="form-group form-group-lg">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10 col-md-4">
                        <button type="submit" name="enregistre" class="btn btn-md btn-success"><span
                                    class="glyphicon glyphicon-saved"></span> Enregistre
                        </button>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection