@extends('layouts.app')
@section('pageTitle', 'Contacte')

@section('content')

<!-- Contact Form - START -->
<div class="container formulaire contacte">
        <div class="row">
            <h1 class="text-center">Contacter-nous</h1>

            <form action="{{url('contacte')}}" class="form-horizontal" method="post">


            {{csrf_field()}}
            <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('email')) has-error @endif">
                    <label class="col-sm-2 control-label">Email : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="email" name="email" class="form-control" value="{{old('email')}}"/>
                        @if($errors->get('email'))
                            @foreach($errors->get('email') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->

                <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('titre')) has-error @endif">
                    <label class="col-sm-2 control-label">Titre : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="titre" class="form-control">
                        @if($errors->get('titre'))
                            @foreach($errors->get('titre') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->

                <!--Begin presentation of Formation-->
                <div class="form-group form-group-lg @if($errors->get('message')) has-error @endif">
                    <label class="col-sm-2 control-label">Message : </label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="message" rows="5" cols="30"
                                  class="form-control">{{old('message')}}</textarea>
                        @if($errors->get('message'))
                            @foreach($errors->get('message') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End presentation of Formation-->


                <div class="form-group form-group-lg">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10 col-md-4">
                        <button type="submit" name="enregistre" class="btn btn-lg btn-success"><span
                                    class="glyphicon glyphicon-send"></span> Envoyer
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection