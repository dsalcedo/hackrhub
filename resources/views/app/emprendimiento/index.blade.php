@extends('app.app')

@section('titulo', 'Hackrhub')

@section('content')
    <div class="container">
        <div class="col-md-12 text-center">
            <h3>Aún no haz creado tu idea de negocio</h3>
            <p>
                <a href="{{ route('emprendimiento.crear') }}" class="btn btn-success" style="font-size: 16px;">
                    ¡Comienza ahora!
                </a>
            </p>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#emprendimiento').addClass('active');
    </script>
@endsection