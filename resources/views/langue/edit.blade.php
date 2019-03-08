@extends('layouts.app')
@section('pageTitle', 'Modifier langue')

@section('content')


    <div class="container formulaire">
        <div class="row">
            <h1 class="text-center">Edit un langue</h1>
            <form action="{{url('langues/'.$langue->id)}}" class="form-horizontal" method="post">
                <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}


            <!--Begin Title of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Langue')) has-error @endif">
                    <label class="col-sm-2 control-label">Langue : </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Langue" class="form-control" value="{{$langue->langue}}"/>
                        @if($errors->get('Langue'))
                            @foreach($errors->get('Langue') as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--End Title of Formation-->


                <!--Begin DateDebut of Formation-->
                <div class="form-group form-group-lg @if($errors->get('Maitrise')) has-error @endif">
                    <label class="col-sm-2 control-label">Maitrise : </label>
                    <div class="col-sm-10 col-md-4">
                        <select name="Maitrise" class="form-control">
                            @if($langue->maitrise=='Bon')
                                <option value="Bon">Bon</option>
                                <option value="Originale">Originale</option>
                                <option value="Moyenne">Moyenne</option>
                                <option value="Faible">Faible</option>
                            @endif
                            @if($langue->maitrise=='Moyenne')
                                <option value="Moyenne">Moyenne</option>
                                <option value="Originale">Originale</option>
                                <option value="Bon">Bon</option>
                                <option value="Faible">Faible</option>
                            @endif
                            @if($langue->maitrise=='Faible')
                                <option value="Faible">Faible</option>
                                <option value="Originale">Originale</option>
                                <option value="Moyenne">Moyenne</option>
                                <option value="Bon">Bon</option>

                            @endif
                            @if($langue->maitrise=='Originale')
                                <option value="Originale">Originale</option>
                                <option value="Bon">Bon</option>
                                <option value="Moyenne">Moyenne</option>
                                <option value="Faible">Faible</option>
                            @endif

                        </select>
                        @if($errors->get('Maitrise'))
                            @foreach($errors->get('Maitrise') as $value)
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