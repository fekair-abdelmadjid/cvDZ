@extends('layouts.app')
@section('pageTitle', 'Ajouter Projet')

@section('content')


    <div class="container formulaire">
        <div class="row">
            <h1 class="text-center">Ajouter un projet</h1>
            <form action="{{url('projets')}}" class="form-horizontal" method="post">
            {{csrf_field()}}


            <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Projet')) has-error @endif">
                    <label class="col-sm-2 control-label">Projet : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Projet" class="form-control"/>
                        @if($errors->get('Projet'))
                            @foreach($errors->get('Projet') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin DateDebut of Formation-->
                <div class="form-group form-group-lg @if($errors->get('presentation')) has-error @endif">
                    <label class="col-sm-2 control-label">Presentation : </label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="presentation" rows="5" cols="30" class="form-control">
                        </textarea>
                        @if($errors->get('presentation'))
                            @foreach($errors->get('presentation') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End DateDebut of Formation-->


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