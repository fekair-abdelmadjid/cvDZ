@extends('layouts.app')
@section('pageTitle', 'Ajouter compétence')

@section('content')


    <div class="container formulaire formulaire2">
        <div class="row">
            <h1 class="text-center">Ajouter un Competence</h1>
            <form action="{{url('competences')}}" class="form-horizontal" method="post">
            {{csrf_field()}}


            <!--Begin Domaine of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Domaine')) has-error @endif">
                    <label class="col-sm-2 control-label">Domaine de compétence : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Domaine" class="form-control"/>
                        @if($errors->get('Domaine'))
                            @foreach($errors->get('Domaine') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Domaine of Formation-->


                <!--Begin DateDebut of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Competence')) has-error @endif">
                    <label class="col-sm-2 control-label">Compétence : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Competence" class="form-control"/>
                        @if($errors->get('Competence'))
                            @foreach($errors->get('Competence') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End DateDebut of Formation-->


                <!--Begin DateDebut of Formation-->
                <div class="form-group form-group-lg @if($errors->get('maitrise')) has-error @endif">
                    <label class="col-sm-2 control-label">Maîtrise : </label>
                    <div class="col-sm-10 col-md-4">
                        <select name="maitrise" class="form-control">
                            <option value="10%">10%</option>
                            <option value="20%">20%</option>
                            <option value="30%">30%</option>
                            <option value="40%">40%</option>
                            <option value="50%">50%</option>
                            <option value="60%">60%</option>
                            <option value="70%">70%</option>
                            <option value="80%">80%</option>
                            <option value="90%">90%</option>
                            <option value="100%">100%</option>
                        </select>
                        @if($errors->get('maitrise'))
                            @foreach($errors->get('maitrise') as $value)
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