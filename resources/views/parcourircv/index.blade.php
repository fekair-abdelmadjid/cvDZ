@extends('layouts.app')
@section('pageTitle', 'Parcourir')

@section('content')
    <!--Begin navbarsearch-->
    <section class="navbarsearch">

        <div class="container">

            <div class="row">
                <form action="{{url('prcoruiresearch')}}" method="post">
                    {{csrf_field()}}

                    <div class="col-md-2">
                        <label class="control-label filtrelable">Filtre les cv : </label>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" name="Wilaya">
                            <option value="">tous les Wilaya</option>
                            <option value="Adrar">01 Adrar</option>
                            <option value="Chlef">02 Chlef</option>
                            <option value="Laghouat">03 Laghouat</option>
                            <option value="Oum El Bouaghi">04 Oum El Bouaghi</option>
                            <option value="Batna">05 Batna</option>
                            <option value="Bejaia">06 Béjaïa</option>
                            <option value="Biskra">07 Biskra</option>
                            <option value="Bechar">08 Béchar</option>
                            <option value="Blida">09 Blida</option>
                            <option value="Bouira">10 Bouira</option>
                            <option value="Tamanrasset">11 Tamanrasset</option>
                            <option value="Tebessa">12 Tébessa</option>
                            <option value="Tlemcen">13 Tlemcen</option>
                            <option value="Tiaret">14 Tiaret</option>
                            <option value="Tizi Ouzou">15 Tizi Ouzou</option>
                            <option value="Alger">16 Alger</option>
                            <option value="Djelfa">17 Djelfa</option>
                            <option value="Jijel">18 Jijel</option>
                            <option value="Setif">19 Sétif</option>
                            <option value="Saida">20 Saïda</option>
                            <option value="Skikda">21 Skikda</option>
                            <option value="Sidi Bel Abbes">22 Sidi Bel Abbès</option>
                            <option value="Annaba">23 Annaba</option>
                            <option value="Guelma">24 Guelma</option>
                            <option value="Constantine">25 Constantine</option>
                            <option value="Medea">26 Médéa</option>
                            <option value="Mostaganem">27 Mostaganem</option>
                            <option value="MSila">28 M'Sila</option>
                            <option value="Mascara">29 Mascara</option>
                            <option value="Ouargla">30 Ouargla</option>
                            <option value="Oran">31 Oran</option>
                            <option value="El Bayadh">32 El Bayadh</option>
                            <option value="Illizi">33 Illizi</option>
                            <option value="Bordj Bou Arreridj">34 Bordj Bou Arreridj</option>
                            <option value="Boumerdes">35 Boumerdès</option>
                            <option value="El Tarf">36 El Tarf</option>
                            <option value="Tindouf">37 Tindouf</option>
                            <option value="Tissemsilt">38 Tissemsilt</option>
                            <option value="El Oued">39 El Oued</option>
                            <option value="Khenchela">40 Khenchela</option>
                            <option value="Souk Ahras">41 Souk Ahras</option>
                            <option value="Tipaza">42 Tipaza</option>
                            <option value="Mila">43 Mila</option>
                            <option value="Ain Defla">44 Aïn Defla</option>
                            <option value="Naama">45 Naâma</option>
                            <option value="Ain Temouchent">46 Aïn Témouchent</option>
                            <option value="Ghardaia">47 Ghardaïa</option>
                            <option value="Relizane">48 Relizane</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="title" class="form-control" placeholder="Domaine ou titre de cv"/>
                    </div>

                    <div class="col-md-2">
                        <button type="submit" name="search" class="btn btn-success btn-md"><span
                                    class=" glyphicon glyphicon-search"></span></button>
                    </div>

                </form>
            </div>
        </div>

    </section>
    <!--End navbarsearch-->


    <!--Begin presentecv-->
    <section class="presentecv">

        <div class="container">

            <div class="row">

                @foreach($cv as $value)
                    <div class="col-sm-6 col-md-3">

                        <div class="card">
                            <div class="box">
                                <div class="img">
                                    <img src="{{asset('uploads/'.$value->user->photo)}}">
                                </div>
                               <a href="{{url('viewcv/'.$value->id)}}" target="_blank">
                                   <h2>{{$value->user->name}}
                                    <br><span>{{$value->titre}}</span></h2>
                               </a>
                                <p>{{$value->domaine}}</p>
                                <span>
                                  <ul>
                                     <li><a href="{{$value->PathFac}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                     <li><a href="{{$value->Pathtwi}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                     <li><a href="{{$value->Pathgoo}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                  </ul>
                                 </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="paginationCv text-center">
                {{$cv->links()}}
            </div>

        </div>
    </section>
    <!--End presentecv-->
@endsection