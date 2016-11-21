@extends('website.app')

@section('titulo', 'Hackrhub')

@section('content')
<div class="container">

</div>

<div class="modal fade" id="modalSuscribete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content"  style="background: #fafafa;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">
                    ¡Únete a Hackrhub!
                </h4>
            </div>
            <div class="modal-body" style="font-size: 16px; font-family: 'Open Sans', sans-serif;">
                {!! Form::open(['route'=>'web.registro', 'id'=>'registro', 'style'=>'margin-top: 0px; margin-bottom: 15px;']) !!}
                    <div class="form-group has-feedback">
                        <input class="form-control input-spacer" placeholder="Nombre completo" name="nombre" type="text">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input class="form-control input-spacer" placeholder="Correo electrónico" name="email" type="text">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback" style="margin-bottom: 20px;">
                        <input class="form-control input-spacer" placeholder="Contraseña" name="password" type="password" value="">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group text-center">
                        <div class="g-recaptcha" data-sitekey="6LeG5QoUAAAAAFxrFjUrcWRG-1aEuEtwBIwhDjWH" align="center" ></div>
                    </div>
                    <input type="submit" id="btn-registro" class="btn btn-block btn-success" value="Regístrate">
                {!! Form::close() !!}
                <p class="text-center" style="font-size: 14px;">
                    Al registrarte, aceptas nuestras <a href="#">Condiciones de uso</a> y <a href="#">Política de privacidad</a>.
                </p>
            </div>
            <div class="modal-footer">
                <p class="text-center">
                    ¿Ya tienes una cuenta? <a href="#">Inicia sesión</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content"  style="background: #fafafa;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">
                    ¡Inicia sesión en tu cuenta!
                </h4>
            </div>
            <div class="modal-body" style="font-size: 16px; font-family: 'Open Sans', sans-serif;">

                <form method="POST" action="http://hackerhub.com/acceso" accept-charset="UTF-8" style="margin-bottom: 15px; margin-top: 15px;"><input name="_token" type="hidden" value="LpXsx6cORVUHykueHmAXJbtR1TBtEW7MHoZ9b0z9">
                    <div class="form-group has-feedback">
                        <input class="form-control input-spacer" placeholder="Correo electrónico" name="email" type="text">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback" style="margin-bottom: 25px;">
                        <input class="form-control input-spacer" placeholder="Contraseña" name="password" type="password" value="">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <input type="submit" class="btn btn-block btn-success" value="Iniciar sesión">
                </form>

                <p class="text-center" style="font-size: 14px;">
                    <a href="#">¿Has olvidado la contraseña?</a>
                </p>
            </div>
            <div class="modal-footer">
                <p class="text-center">
                    <a href="#" class="btn btn-lg btn-facebook">
                        <i class="fa fa-facebook"></i> Iniciar sesión con Facebook
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        var validatorRegistro = $("#registro").validate(
                {
                    showLabel: false,
                    rules: {
                        "nombre": {
                            required: true,
                            maxlength: 255
                        },
                        "email": {
                            email: true,
                            required: true,
                            maxlength: 255
                        },
                        "password": {
                            required: true,
                            maxlength: 255
                        }
                    },
                    invalidHandler: function(event, validator) {
                        // 'this' refers to the form
                        var errors = validator.numberOfInvalids();
                        $('#btn-registro').val('Regístrate').removeClass('disabled').attr('disabled', false);
                    },
                    submitHandler: function(form) {
                        $('#btn-registro').val('Registrando...').addClass('disabled').attr('disabled', true);
                        var valid = grecaptcha.getResponse();
                        if(valid!=''){
                            form.submit();
                        }else{
                            $('#btn-registro').val('Regístrate').removeClass('disabled').attr('disabled', false);
                        }
                    }
                }
        );

        validatorRegistro.form();

    </script>
@endsection