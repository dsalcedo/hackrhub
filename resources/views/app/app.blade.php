<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@yield('meta')
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/0b50173a0b.css">
    <link rel="stylesheet" type="text/css" href='https://fonts.googleapis.com/css?family=Quicksand|Oswald|Source+Serif+Pro:400,700|Open+Sans' />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
    <link href="{{asset('css/website.css')}}" rel="stylesheet">
    <link href="{{asset('libs/nprogress/nprogress.css')}}" rel="stylesheet">
    <link href="{{ asset('libs/waves/waves.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>
<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('website.index') }}">
                <img src="{{ asset('images/hhubLogo.png') }}" width="130">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li id="emprendimiento">
                    <a href="{{ route('app.emprendimiento') }}">Emprendimiento</a>
                </li>
               <!--<li>
                    <a href="{{ route('app.eventos') }}">Eventos</a>
                </li>
                <li>
                    <a href="{{ route('app.ofertas') }}">
                        Freelance
                    </a>
                </li>
                <li>
                    <a href="{{ route('app.ofertas') }}">
                        Startup Academy
                    </a>
                </li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Mi cuenta <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('app.perfil') }}">Perfil</a></li>
                        <li><a href="{{ route('app.curriculum') }}">Curriculum</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('libs/nprogress/nprogress.js')}}"></script>
{!! Html::script('libs/waves/waves.min.js') !!}
<script>
    NProgress.start();
    window.onload = function () { NProgress.done(); }
    Waves.attach('.btn');
    Waves.init();
</script>

@yield('js')
</body>
</html>