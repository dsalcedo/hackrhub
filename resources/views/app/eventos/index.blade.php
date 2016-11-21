@extends('app.app')

@section('titulo', 'Eventos')

@section('css')
    <style>
        .events-grid .thumbnail {
            padding: 0;
        }
        .events-grid .thumbnail > .caption > h3 {
            font-size: 18px;
            margin-top: 5px;
            margin-bottom: 15px;
        }
        .events-grid .thumbnail > .caption .glyphicon {
            color: #3f3f3f;
        }
        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .events-grid .thumbnail .btn-primary {
            margin-top: 50px;
        }
    </style>
@endsection

@section('content')
    <div class="container events-grid">
        <div class="col-md-3">
            <div class="thumbnail">
                <a href="{{ route('evento.mostrar') }}">
                    <img src="https://boletia-v2.s3.amazonaws.com/uploads/event/banner/9931/thumb_imagen-boletia_4.png" alt="">
                </a>
                <div class="caption">
                    <h3>
                        <a href="{{ route('evento.mostrar') }}">
                            Code Party Pase Semestral
                        </a>
                    </h3>
                    <p>
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> January 01, 2016
                    </p>
                    <p class="truncate">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>  World Trade Center Ciudad de México
                    </p>
                    <p>
                        <a href="{{ route('evento.mostrar') }}" class="btn btn-primary btn-block" role="button">Pedir boletos</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection