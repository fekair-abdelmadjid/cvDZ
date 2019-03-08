<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>Cv {{$cv->user->FamilyName}} {{$cv->user->FirstName}}</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('viewcvassets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('viewcvassets/plugins/font-awesome/css/font-awesome.css') }}">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('viewcvassets/css/styles.css') }}">



</head>

<body>

<!--Begin tool box-->

<section class="option-box">
    <div class="colo-obtion">
        <h4 class="text-center">Option de color</h4>
        <ul class="list-unstyled">
            <li style="cursor: pointer" data-value="{{ asset('viewcvassets/css/styles.css') }}"></li>
            <li style="cursor: pointer" data-value="{{ asset('viewcvassets/css/styles-2.css') }}"></li>
            <li style="cursor: pointer" data-value="{{ asset('viewcvassets/css/styles-3.css') }}"></li>
            <li style="cursor: pointer" data-value="{{ asset('viewcvassets/css/styles-4.css') }}"></li>
            <li style="cursor: pointer" data-value="{{ asset('viewcvassets/css/styles-5.css') }}"></li>
            <li style="cursor: pointer" data-value="{{ asset('viewcvassets/css/styles-6.css') }}"></li>
        </ul>
    </div>
    <li class="fa fa-gear fa-3x gear-check"></li>
</section>

<!--End tool box-->

<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <img class="profile img-circle" src="{{asset('uploads/'.$cv->user->photo)}}" alt="" width="100px"
                 height="100px"/>
            <h1 class="name">{{$cv->user->FamilyName}} {{$cv->user->FirstName}}</h1>
            <h3 class="tagline">{{$cv->titre}}</h3>
        </div><!--//profile-container-->


        <!--=========================== Begin Contactes ================================-->
        <div class="contact-container container-block">
            <h2 class="container-block-title"><i class="fa fa-list"></i> Contactes</h2>
            <ul class="list-unstyled contact-list">
                <li class="email"><i class="fa fa-envelope"></i><br><a href="#">{{$cv->user->email}}</a></li>
                <li class="phone"><i class="fa fa-phone"></i><br><a href="#">{{$cv->user->Phone}}</a></li>
                <li class="facebook"><i class="fa fa-facebook"></i><br><a href="{{$cv->user->PathFac}}"
                                                                      target="_blank">{{$cv->user->name}}</a></li>
                <li class="twitter"><i class="fa fa-twitter"></i><br><a href="{{$cv->user->Pathtwi}}"
                                                                    target="_blank">{{$cv->user->name}}</a></li>
                <li class="google-plus"><i class="fa fa-google-plus"></i><br><a href="{{$cv->user->Pathgoo}}"
                                                                            target="_blank">{{$cv->user->name}}</a></li>

            </ul>
        </div><!--//contact-container-->
        <!--=========================== End Contactes ================================-->


        <!--=========================== Begin Diplome ================================-->
        @if(isset($cv->diplomes[0]))
        <div class="education-container container-block">
            <h2 class="container-block-title"><i class="fa fa-university"></i> Diplôme</h2>
            @foreach($cv->diplomes as $value)
                <div class="item">
                    <h4 class="degree">{{$value->titre}}</h4>
                    <h5 class="meta">{{$value->Etablissement}}</h5>
                    <div class="time">{{$value->Date}}</div>
                </div><!--//item-->
            @endforeach
        </div><!--//education-container-->
        @else
         <div class="education-container container-block">
            <h2 class="container-block-title"><i class="fa fa-university"></i> Diplôme</h2>
                    <div class="item">
                       <div class="time">aucun Diplôme</div>
                    </div>
        </div><!--//education-container-->
        @endif
        <!--=========================== End Diplome ================================-->


        <!--=========================== Begin Langues ================================-->
        @if(isset($cv->langues[0]))
        <div class="languages-container container-block">
            <h2 class="container-block-title"><i class="fa fa-language"></i> Langues</h2>
            <ul class="list-unstyled interests-list">
                @foreach($cv->langues as $value)
                    <li>{{$value->langue}} <span class="lang-desc">({{$value->maitrise}})</span></li>
                @endforeach
            </ul>
        </div><!--//interests-->
        @else
        <div class="languages-container container-block">
            <h2 class="container-block-title"><i class="fa fa-language"></i> Langues</h2>
                    <div class="item">
                       <div class="time">aucun Langues</div>
                    </div>
        </div><!--//interests-->
        @endif
        <!--=========================== End Langues ================================-->
    </div>

    <div class="main-wrapper">

        <!--=========================== Begin information personnelle ================================-->
        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>information personnelle</h2>
            <div class="summary">

                <div class="item">
                    <span class="project-title"><a href="#" target="_blank">Nom : </a></span><span
                            class="project-tagline">{{$cv->user->FamilyName}}</span>
                </div><!--//item-->
                <br>
                <div class="item">
                    <span class="project-title"><a href="#" target="_blank">Prénom : </a></span><span
                            class="project-tagline">{{$cv->user->FirstName}}</span>
                </div><!--//item-->
                <br>
                <div class="item">
                    <span class="project-title"><a href="#" target="_blank">Date Naissance : </a></span><span
                            class="project-tagline">{{$cv->user->DateBirth}}</span>
                </div><!--//item-->
                <br>
                <div class="item">
                    <span class="project-title"><a href="#" target="_blank">Wilaya : </a></span><span
                            class="project-tagline">{{$cv->user->Wilaya}}</span>
                </div><!--//item-->
                <br>
                <div class="item">
                    <span class="project-title"><a href="#" target="_blank">Adresse : </a></span><span
                            class="project-tagline">{{$cv->user->Adresse}}</span>
                </div><!--//item-->

            </div><!--//summary-->
        </section><!--//section-->
        <!--=========================== End information personnelle ================================-->


        <!--=========================== Begin Formations  ================================-->
        @if(isset($cv->formations[0]))
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-graduation-cap"></i>Formations</h2>

            <div class="item">
                @foreach($cv->formations as $value)
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{$value->titre}}</h3>
                            <div class="time">{{$value->Date}}</div>
                        </div><!--//upper-row-->
                        <div class="company">{{$value->Etablissement}}</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>{{$value->Description}}</p>
                    </div><!--//details--> <br>
                @endforeach

            </div><!--//item-->


        </section><!--//section-->
        @else
           <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-graduation-cap"></i>Formations</h2>

            <div class="item">
                        <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">formation</h3>
                        </div><!--//upper-row-->
                    </div><!--//meta-->
                    <div class="details">
                        <p>aucun formation</p>
                    </div><!--//details--> <br>
            </div><!--//item-->
        </section><!--//section-->
        @endif
        <!--=========================== End Formations  ================================-->


        <!--=========================== Begin Experiences ================================-->
        @if(isset($cv->experiences[0]))
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Expériences</h2>

            <div class="item">
                @foreach($cv->experiences as $value)
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{$value->titre}}</h3>
                            <div class="time">{{$value->DateDebut}} - {{$value->DateFin}}</div>
                        </div><!--//upper-row-->
                        <div class="company">{{$value->NomEntreprise}}</div>
                    </div><!--//meta-->
                @endforeach
            </div><!--//item-->
        </section><!--//section-->
        @else
            <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Expériences</h2>
            <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">experiences</h3>
                        </div><!--//upper-row-->
                        <div class="company">aucun experiences</div>
                    </div><!--//meta-->
            </div><!--//item-->
        </section><!--//section-->

        @endif
        <!--=========================== End Experiences ================================-->


        <!--=========================== Begin Projets ================================-->
          @if(isset($cv->projets[0]))
        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Projets</h2>
            @foreach($cv->projets as $value)
                <div class="item">
                    <span class="project-title"><a href="#hook">{{$value->titre}}</a></span> - <span
                            class="project-tagline">{{$value->presentation}}.</span>
                </div><!--//item-->
            @endforeach
        </section><!--//section-->
        @else
           <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Projets</h2>
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Projets</h3>
                        </div><!--//upper-row-->
                        <div class="company">aucun Projets</div>
                    </div><!--//meta-->
        </section><!--//section-->
        @endif
        <!--=========================== End Projets ================================-->


        <!--=========================== Begin Compétence ================================-->
        @if(isset($cv->competences[0]))
        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Compétence</h2>
            <div class="skillset">
                @foreach($cv->competences as $value)
                    <div class="item">
                        <h3 class="level-title">{{$value->Domaine}}</h3><br>
                        <p>{{$value->titre}}</p>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="{{$value->maitrise}}">
                            </div>
                        </div><!--//level-bar-->
                    </div><!--//item-->
                @endforeach
            </div>
        </section><!--//skills-section-->
        @else
         <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Compétence</h2>
            <div class="skillset">
               <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Compétence</h3>
                        </div><!--//upper-row-->
                        <div class="company">aucun Compétence</div>
                    </div><!--//meta-->
            </div>
        </section><!--//skills-section-->

        @endif
        <!--=========================== Begin Compétence ================================-->

    </div><!--//main-body-->
</div>

<footer class="footer">
    <div class="text-center">
    </div><!--//container-->
</footer><!--//footer-->

<!-- Javascript -->
<script type="text/javascript" src="{{ asset('viewcvassets/plugins/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('viewcvassets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- custom js -->
<script type="text/javascript" src="{{ asset('viewcvassets/js/main.js') }}"></script>
</body>
</html>