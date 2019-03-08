@extends('layouts.app')
@section('pageTitle', 'Ajouter expérience')

@section('content')


    <div class="container formulaire">
        <div class="row">
            <h1 class="text-center">Ajouter un Experience</h1>
            <form action="{{url('experiences')}}" class="form-horizontal" method="post">
            {{csrf_field()}}


            <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('titreex')) has-error @endif">
                    <label class="col-sm-2 control-label">Intitulé du poste : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="titreex" class="form-control"/>
                        @if($errors->get('titreex'))
                            @foreach($errors->get('titreex') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->



                <!--Begin DateDebut of Formation-->
                <div class="form-group form-group-lg @if($errors->get('DateDebutex')) has-error @endif">
                    <label class="col-sm-2 control-label">Date de début : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="date" name="DateDebutex" class="form-control"/>
                        @if($errors->get('DateDebutex'))
                            @foreach($errors->get('DateDebutex') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End DateDebut of Formation-->


                <!--Begin Date de fin of Formation-->
                <div class="form-group form-group-lg @if($errors->get('DateFinex')) has-error @endif">
                    <label class="col-sm-2 control-label">Date de fin : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="date" name="DateFinex" class="form-control" placeholder="si en coure laissez-vide" />
                        @if($errors->get('DateFinex'))
                            @foreach($errors->get('DateFinex') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Date de fin of Formation-->


                <!--Begin Date de fin of Formation-->
                <div class="form-group form-group-lg @if($errors->get('NomEntrepriseex')) has-error @endif">
                    <label class="col-sm-2 control-label">Nom de l'entreprise : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="NomEntrepriseex" class="form-control"/>
                        @if($errors->get('NomEntrepriseex'))
                            @foreach($errors->get('NomEntrepriseex') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Date de fin of Formation-->


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