@extends('app.app')

@section('titulo', 'Nombre del evento | Evento')

@section('css')
    <style>
        body {
            background: #f3f3f3;
        }
        .navbar-static-top {
            margin-bottom: 0;
        }
        .container-event {
            max-width: 99.4rem;
        }
        .container-event .jumbotron {
            border-radius: 0;
            padding: 0;
            background: #5a5a5a;
            margin-bottom: 10px;
        }
        .logoBrand{
            margin-bottom: 15px;
            border-radius: 2px;
        }
        .container-event h1 {

        }
        .page-header {
            margin: 0px 0 20px;
            font-family: 'Oswald', sans-serif;
        }
        .evento-sidebar h4,
        .evento-sidebar p,
        .evento-contenido p {
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;
        }

        @media(max-width: 767px) {
            body {
                padding-top: 50px;
            }
            .container-event {
                width: 100%;
                max-width: 100%;
                padding: 0;
            }
            .logoBrand {
                margin-top: -90px;
                width: 100px;
                height: 100px;
                border: solid 4px #fff;
            }
            .evento-sidebar .page-header{
                text-align: center;
            }
            .evento-detalles {
                margin-bottom: 15px;
            }
            .evento-sidebar p {
                font-size: 16px;
            }
            .container-event h1 {
                text-align: center;
            }
            .evento-contenido {
                margin-top: 30px;
            }

        }

    </style>
@endsection

@section('content')
    <div class="container container-event">
        <div class="jumbotron" style="margin-bottom: 0;">
            <img src="http://www.austrianstartups.com/wp-content/uploads/2016/06/Hackathon-What-the-Hack-Carinthia.png" class="img-responsive">
        </div>
        <div class="col-md-12" style="background: #fff;">
            <div class="row" style="margin-bottom: 20px; margin-top: 20px;">

                <div class="col-md-3 evento-sidebar">
                    <div class="col-md-12">
                        <div class="row text-center">
                            <img class="logoBrand" src="https://boletia-v2.s3.amazonaws.com/uploads/event/logo/11850/large_ROCKSTAFF.jpg">
                        </div>
                    </div>
                    <div class="col-md-12 evento-detalles">
                        <div class="row">
                            <p class="page-header text-center" style="font-family: 'Open Sans', sans-serif; font-size: 12px;">
                                Coparmex Morelos
                            </p>
                            <p class="text-center" style="margin-bottom: 20px;">
                                <a href="{{ route('evento.entradas') }}" class="btn btn-hhub" style="width: 100%;">
                                    <i class="fa fa-ticket" aria-hidden="true"></i>
                                    Conseguir entradas
                                </a>
                            </p>
                            <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 03 de Sep 2016</p>
                            <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 4:00pm - 10:00pm</p>
                            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Tec. de Monterrey</p>
                            <p>Calz. de Tlalpan 1189, San Simón, 03660 Ciudad de México, D.F., México</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <img src="http://cdn.newsapi.com.au/image/v1/0a0ceda4bda18e664ffac1a8fa86a7d1" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-md-9 evento-contenido">
                    <h1 class="page-header">Evento de pruebacon un título mas o menos un poco largo</h1>
                    <p>Rockstaff producciones llevan para ti un evento sin otro igual en un lugar mítico lleno de tradición.</p>
                    <p>Precio de Boletos.</p>
                    <p>General fase 1 $100 del 4 de Julio al 16 de Julio</p>
                    <p>General fase 2 $150 del 17 de Julio al 30 de Julio</p>
                    <p>General fase 3 $200 del 31 de Julio al  1 de Septiembre</p>
                    <p>SÚPER FAN PACK $600 Incluye:(Disco de Odisseo + Camilo Séptimo + Poster + Meet & Greet en zona VIP + disco de Rizzo)</p>
                    <p>Lugar del evento: CALIFORNIA DANCING CLUB</p>
                    <p>Dirección: Calzada de Tlalpan #1189 Colonia Portales entre el Metro Nativitas y Portales</p>
                    <p>Rockstaff producciones llevan para ti un evento sin otro igual en un lugar mítico lleno de tradición.</p>
                    <p>Precio de Boletos.</p>
                    <p>General fase 1 $100 del 4 de Julio al 16 de Julio</p>
                    <p>General fase 2 $150 del 17 de Julio al 30 de Julio</p>
                    <p>General fase 3 $200 del 31 de Julio al  1 de Septiembre</p>
                    <p>SÚPER FAN PACK $600 Incluye:(Disco de Odisseo + Camilo Séptimo + Poster + Meet & Greet en zona VIP + disco de Rizzo)</p>
                    <p>Lugar del evento: CALIFORNIA DANCING CLUB</p>
                    <p>Dirección: Calzada de Tlalpan #1189 Colonia Portales entre el Metro Nativitas y Portales</p>
                    <p>Rockstaff producciones llevan para ti un evento sin otro igual en un lugar mítico lleno de tradición.</p>
                    <p>Precio de Boletos.</p>
                    <p>General fase 1 $100 del 4 de Julio al 16 de Julio</p>
                    <p>General fase 2 $150 del 17 de Julio al 30 de Julio</p>
                    <p>General fase 3 $200 del 31 de Julio al  1 de Septiembre</p>
                    <p>SÚPER FAN PACK $600 Incluye:(Disco de Odisseo + Camilo Séptimo + Poster + Meet & Greet en zona VIP + disco de Rizzo)</p>
                    <p>Lugar del evento: CALIFORNIA DANCING CLUB</p>
                    <p>Dirección: Calzada de Tlalpan #1189 Colonia Portales entre el Metro Nativitas y Portales</p>
                    <p>Rockstaff producciones llevan para ti un evento sin otro igual en un lugar mítico lleno de tradición.</p>
                    <p>Precio de Boletos.</p>
                    <p>General fase 1 $100 del 4 de Julio al 16 de Julio</p>
                    <p>General fase 2 $150 del 17 de Julio al 30 de Julio</p>
                    <p>General fase 3 $200 del 31 de Julio al  1 de Septiembre</p>
                    <p>SÚPER FAN PACK $600 Incluye:(Disco de Odisseo + Camilo Séptimo + Poster + Meet & Greet en zona VIP + disco de Rizzo)</p>
                    <p>Lugar del evento: CALIFORNIA DANCING CLUB</p>
                    <p>Dirección: Calzada de Tlalpan #1189 Colonia Portales entre el Metro Nativitas y Portales</p><p>Rockstaff producciones llevan para ti un evento sin otro igual en un lugar mítico lleno de tradición.</p>
                    <p>Precio de Boletos.</p>
                    <p>General fase 1 $100 del 4 de Julio al 16 de Julio</p>
                    <p>General fase 2 $150 del 17 de Julio al 30 de Julio</p>
                    <p>General fase 3 $200 del 31 de Julio al  1 de Septiembre</p>
                    <p>SÚPER FAN PACK $600 Incluye:(Disco de Odisseo + Camilo Séptimo + Poster + Meet & Greet en zona VIP + disco de Rizzo)</p>
                    <p>Lugar del evento: CALIFORNIA DANCING CLUB</p>
                    <p>Dirección: Calzada de Tlalpan #1189 Colonia Portales entre el Metro Nativitas y Portales</p><p>Rockstaff producciones llevan para ti un evento sin otro igual en un lugar mítico lleno de tradición.</p>
                    <p>Precio de Boletos.</p>
                    <p>General fase 1 $100 del 4 de Julio al 16 de Julio</p>
                    <p>General fase 2 $150 del 17 de Julio al 30 de Julio</p>
                    <p>General fase 3 $200 del 31 de Julio al  1 de Septiembre</p>
                    <p>SÚPER FAN PACK $600 Incluye:(Disco de Odisseo + Camilo Séptimo + Poster + Meet & Greet en zona VIP + disco de Rizzo)</p>
                    <p>Lugar del evento: CALIFORNIA DANCING CLUB</p>
                    <p>Dirección: Calzada de Tlalpan #1189 Colonia Portales entre el Metro Nativitas y Portales</p>


                </div>

            </div>
        </div>
    </div>
@endsection