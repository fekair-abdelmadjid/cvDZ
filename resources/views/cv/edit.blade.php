@extends('layouts.app')
@section('pageTitle', 'Modifier cv')

@section('content')


    <div class="container formulaire">
        <div class="row">
            <h1 class="text-center">Créer un cv</h1>

            <form action="{{url('cvs/'.$cv->id)}}" class="form-horizontal" method="post">
                <input type="hidden" name="_method" value="PUT">

            {{csrf_field()}}

            <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('titre')) has-error @endif">
                    <label class="col-sm-2 control-label">Titre : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="titre" class="form-control" value="{{$cv->titre}}"/>
                        @if($errors->get('titre'))
                            @foreach($errors->get('titre') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->

                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('domaine')) has-error @endif">
                    <label class="col-sm-2 control-label">Domaine : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="domaine" class="form-control">
                        @if($errors->get('domaine'))
                            @foreach($errors->get('domaine') as $value)
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
                                  class="form-control">{{$cv->prsentation}}</textarea>
                        @if($errors->get('Presentation'))
                            @foreach($errors->get('Presentation') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End presentation of Formation-->


                <div class="form-group form-group-lg">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10 col-md-4">
                        <button type="submit" name="enregistre" class="btn btn-md btn-success"><span
                                    class="glyphicon glyphicon-saved"></span> Modifer
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection