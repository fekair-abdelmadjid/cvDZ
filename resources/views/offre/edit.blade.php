@extends('layouts.app')
@section('pageTitle', 'Ajouter Offre')

@section('content')


    <div class="container formulaire">
        <div class="row">
            <h1 class="text-center">Ajouter un Offre</h1>
            <form action="{{url('offre/'.$offre->id)}}" class="form-horizontal" method="post"
                  enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT"/>
            {{csrf_field()}}


            <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('titre')) has-error @endif">
                    <label class="col-sm-2 control-label">Titre : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="titre" class="form-control" value="{{$offre->titre}}"/>
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
                        <input type="text" name="entrprise" class="form-control" value="{{$offre->entrprise}}"/>
                        @if($errors->get('entrprise'))
                            @foreach($errors->get('entrprise') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Secteur')) has-error @endif">
                    <label class="col-sm-2 control-label">Secteur d'activité : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Secteur" class="form-control" value="{{$offre->Secteur}}"/>
                        @if($errors->get('Secteur'))
                            @foreach($errors->get('Secteur') as $value)
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
                        <input type="text" name="Lieu" class="form-control" value="{{$offre->Wilaya}}"/>
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
                        <input type="date" name="Date" class="form-control" value="{{$offre->Date}}"/>
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
                        <input type="number" name="Nombre" class="form-control" value="{{$offre->Nombre_post}}"/>
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
                        <input type="text" name="Niveau" class="form-control" value="{{$offre->Niveau}}"/>
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
                        <input type="text" name="Type" class="form-control" value="{{$offre->Type_contrat}}"/>
                        @if($errors->get('Type'))
                            @foreach($errors->get('Type') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin presentation of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Presentation')) has-error @endif">
                    <label class="col-sm-2 control-label">Presentation : </label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="Presentation" rows="5" cols="30"
                                  class="form-control">{{$offre->presentation}}</textarea>
                        @if($errors->get('Presentation'))
                            @foreach($errors->get('Presentation') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End presentation of Formation-->


                <!--Begin presentation of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Dossier')) has-error @endif">
                    <label class="col-sm-2 control-label">Dossier : </label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="Dossier" rows="5" cols="30"
                                  class="form-control">{{$offre->Dossier}}</textarea>
                        @if($errors->get('Dossier'))
                            @foreach($errors->get('Dossier') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End presentation of Formation-->


                <!--Begin presentation of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Missions')) has-error @endif">
                    <label class="col-sm-2 control-label">Missions du poste : </label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="Missions" rows="5" cols="30"
                                  class="form-control">{{$offre->Missions_poste}}</textarea>
                        @if($errors->get('Missions'))
                            @foreach($errors->get('Missions') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End presentation of Formation-->


                <!--Begin presentation of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Profil')) has-error @endif">
                    <label class="col-sm-2 control-label">Profil Recherche : </label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="Profil" rows="5" cols="30"
                                  class="form-control">{{$offre->Profil_recherche}}</textarea>
                        @if($errors->get('Profil'))
                            @foreach($errors->get('Profil') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End presentation of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Adrasse')) has-error @endif">
                    <label class="col-sm-2 control-label">Adrasse : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Adrasse" value="{{$offre->adrasse}}" class="form-control"/>
                        @if($errors->get('Type'))
                            @foreach($errors->get('Adrasse') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Telephone')) has-error @endif">
                    <label class="col-sm-2 control-label">Téléphone : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Telephone" class="form-control" value="{{$offre->phone}}"/>
                        @if($errors->get('Telephone'))
                            @foreach($errors->get('Telephone') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Source')) has-error @endif">
                    <label class="col-sm-2 control-label">Source : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Source" class="form-control" value="{{$offre->source}}" placeholder="URL:"/>
                        @if($errors->get('Source'))
                            @foreach($errors->get('Source') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


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