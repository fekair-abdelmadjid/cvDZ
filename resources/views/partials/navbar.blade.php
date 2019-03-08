<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('index') }}">
                cv<span>DZ</span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="#"><span class=" glyphicon glyphicon-home"></span></a></li>
                <li><a href="{{url('prcoruire')}}">Parcourir cv</a></li>
                <li><a href="{{url('offre/Parcourir')}}">Offres d'emploi</a></li>
                <li><a href="{{url('contacte')}}">Contact</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a>
                    </li>
                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>
                            S'inscrire</a></li>
                @else
                    <li class="nothover">
                        <img src="{{asset('uploads/'.Auth::user()->photo)}}" width="40px" height="40px" class="img-circle">
                    </li>
                    <li class="dropdown nothover">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('cvs')}}"><span class="glyphicon glyphicon-file"></span> Mon compte</a></li>
                            <li><a href="{{url('users/edit')}}"><span class="glyphicon glyphicon-user"></span> Mes
                                    paramètres</a></li>

                            @if(Auth::user()->is_admin==1)
                                <li><a href="{{url('adminpanel')}}"><span class="glyphicon glyphicon-forward"></span> Admin</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out"></span> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>