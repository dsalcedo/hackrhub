<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('titulo')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700|Ramabhadra|Noto+Sans" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
    <link href="{{asset('css/website.css')}}" rel="stylesheet">
    <link href="{{asset('libs/nprogress/nprogress.css')}}" rel="stylesheet">

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
        <!--<div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="iniciar-sesion">
                    <a href="#" data-toggle="modal" data-target="#modalIniciarSesion">Iniciar sesión</a>
                </li>
                <li class="active">
                    <a href="#" data-toggle="modal" data-target="#modalSuscribete">Suscríbete</a>
                </li>
            </ul>
        </div>--><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

@yield('modals')

{!! Html::script('libs/nprogress/nprogress.js') !!}
<script>
    NProgress.start();
    window.onload = function () { NProgress.done(); }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
{!! Html::script('libs/jqueryvalidation/jquery.validate.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}

@yield('js')
</body>
</html>