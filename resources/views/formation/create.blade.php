@extends('layouts.app')
@section('pageTitle', 'Ajouter formation')

@section('content')


    <div class="container formulaire">
        <div class="row">
            <h1 class="text-center">Ajouter un formation</h1>
            <form action="{{url('formations')}}" class="form-horizontal" method="post">
            {{csrf_field()}}


            <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Formation')) has-error @endif">
                    <label class="col-sm-2 control-label">Formation : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Formation" class="form-control"/>
                        @if($errors->get('Formation'))
                            @foreach($errors->get('Formation') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin DateDebut of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Etablissement')) has-error @endif">
                    <label class="col-sm-2 control-label">Etablissement : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Etablissement" class="form-control"/>
                        @if($errors->get('Etablissement'))
                            @foreach($errors->get('Etablissement') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End DateDebut of Formation-->


                <!--Begin Date de fin of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Description')) has-error @endif">
                    <label class="col-sm-2 control-label">Description : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Description" class="form-control"/>
                        @if($errors->get('Description'))
                            @foreach($errors->get('Description') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Date de fin of Formation-->


                <!--Begin Date de fin of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Date')) has-error @endif">
                    <label class="col-sm-2 control-label">Date : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="date" name="Date" class="form-control"/>
                        @if($errors->get('Date'))
                            @foreach($errors->get('Date') as $value)
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