@extends('website.app')

@section('titulo', 'Hackrhub')

@section('content')

    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }
        .navbar-static-top {
            margin-bottom: 0px;
        }
        .welcome-fluid {
            margin-top: 0px;
            margin-bottom: 0px;
            max-height: 820px;
        }
        .welcome{
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-image: url("{{asset('/images/coworkbg.jpg')}}");
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            max-height: 820px;
            opacity: 1;
            visibility: inherit;
            z-index: 20;
            border-radius: 0!important;
        }
        .welcome h1 {
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            color: #fff;
            letter-spacing: 3px;
            text-shadow: 0 1px 3px rgba(0,0,0,.4);
        }
        .vertical-center {
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
        }

        @media screen and (max-width: 767px){
            body {
                padding-top: 0px;
            }
            .welcome h1 {
                text-align: center;
                font-size: 30px;
                line-height: 1.3;
            }

        }
        @media screen and (min-width: 768px){
            .welcome h1 {
                font-size: 47px;
            }
        }
        .rbg {
            padding-top: 200px !important;
            padding-bottom: 200px !important;
            background-image: url(https://nomad.progressionstudios.com/wp-content/uploads/2016/10/image-grid.jpg?id=49) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
        .bold {
            font-weight: bold;
        }
        .landing p{
            font-size: 16px;
            font-weight: 400;
            font-family: 'Noto Sans', sans-serif;
        }
    </style>
    <div class="container-fluid">
        <div class="row welcome-fluid">
            <div class="welcome jumbotron vertical-center">
                <div class="container">
                    <div class="col-xs-12 col-md-6">
                        <h1 class="text-uppercase">Somos una apasionada comunidad de Freelancers y emprendedores</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container landing">
        <div class="col-md-6">
            <h2 class="bold text-uppercase bordered">Y esto es lo que haremos</h2>
            <p class="m-b"><strong class="b">1.-</strong> Vamos a fomentar la cultura emprendedora dentro y fuera de nuestra ciudad.</p>
            <p class="m-b"><strong class="b">2.-</strong> Apoyaremos a los emprendedores no solo brindándoles su espacio de trabajo, también daremos asesoria personalizada.</p>
            <p class="m-b"><strong class="b">3.-</strong> Nos esforzaremos por traer/hacer eventos donde el networking y el espíritu de compañerismo exista.</p>
            <p class="m-b"><strong class="b">4.-</strong> Talleres, cursos y capacitación; Así es como queremos ayudarte para que potencialices tu talento.</p>
        </div>
        <div class="col-md-6">
            <div class="rbg"></div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row text-center p70" style="background-color: #f7f7f7;">
            <div class="container">
                <h2 class="bold text-uppercase">El primer cowork en Morelos</h2>
                <h3 class="text-center">Somos mucho más que un espacio de trabajo. Somos una comunidad.</h3>
            </div>
        </div>
    </div>
    <style>
        .list-courses h3 {
            border-bottom: 1px dashed #ff184f;
            padding-bottom: 15px;
        }
    </style>
    <div class="container-fluid">
        <div class="row p70">
            <div class="container">
                <div class="col-md-12 text-center" style="margin-bottom: 30px;">
                    <img src="{{ asset('/images/workshops.png') }}" style="max-width: 100%;">
                    <h2 class="bold text-uppercase">Primeros talleres que vamos a impartir</h2>
                </div>
                <div class="col-md-6 text-center list-courses">
                    <h3>Introducción al marketing digital</h3>
                    <h3>Curso de Social Media Marketing</h3>
                    <h3>Curso Profesional de Marca Personal</h3>
                    <h3>Taller de creación de Startups</h3>
                </div>
                <div class="col-md-6 text-center list-courses">
                    <h3>Curso de Programación Básica</h3>
                    <h3>Curso de Profesional de Desarrollo Web</h3>
                    <h3>Curso de PHP con Laravel</h3>
                    <h3>Curso profesional de Git y GitHub</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid landing">
        <div class="row social-espacio text-center" style="color: #fff;">
            <div class="container">
                <h2 class="bold">¿Quieres formar parte de esto?</h2>
                <h3>¡Pre-regístrate en Hackrhub y serás de los primeros en obtener grandes beneficios!</h3>
                <h3>Te mantendremos buenas noticias muy, muy pronto ;)</h3>
                <p>
                    <a href="#" class="btn btn-hhub-default btn-lg" style="margin-top: 30px;" data-toggle="modal" data-target="#modalSuscribete">
                        ¡Únete ya mismo!
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row footer">
            <div class="container landing text-center">
                <img src="http://www.aycafe.mx/wp/wp-content/uploads/2012/07/sello-hecho-en-mexico.png" style="width: 100px;">
                <p class="bold" style="margin-top: 15px; color: #fff;">©2016 Hackrhub, hecho por emprendedores para emprendedores.</p>
                <p><a href="#" data-toggle="modal" data-target="#aviso-privacidad">AVISO DE PRIVACIDAD</a></p>
            </div>
        </div>
    </div>
@endsection

@section('modals')
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
                        Al registrarte, aceptas nuestro <!--<a href="#">Condiciones de uso</a> y --><a href="#">Aviso de privacidad</a> .
                    </p>
                </div>
               <!--<div class="modal-footer">
                    <p class="text-center">
                        ¿Ya tienes una cuenta? <a href="#">Inicia sesión</a>
                    </p>
                </div>-->
            </div>
        </div>
    </div>

    <div id="aviso-privacidad" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document" style="width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Aviso de privacidad</h4>
                </div>
                <div class="modal-body">
                    <p>Con fundamento en los artículos 15, 16, 17 y 18 de la Ley Federal de Protección de Datos Personales en Posesión de Particulares hacemos de su conocimiento que Hackrhub S.A.S. con domicilio en Av. Teopanzolco edif. 17 piso 3, Colonia Teopanzolco,Cuernavaca Morelos, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección.</p>
                    <p>
                        <strong>
                            ¿Para qué fines recabamos y utilizamos sus datos personales?
                        </strong>
                    </p>
                    <p>Su información personal será utilizada con los siguientes fines:</p>
                    <ul>
                        <li>Proveer y/o promover información de los servicios y/o productos que ha solicitado</li>
                        <li>Responder a sus requerimientos de información, atención y servicio</li>
                        <li>Informarle sobre nuevos servicios o productos que tengan relación con los que usted ha adquirido/contratado, así como notificarle cambios en los mismos</li>
                        <li>Evaluar periódicamente la calidad del servicio que le brindamos con el fin de mejorar el mismo</li>
                        <li>Elabora estudios y/o programas necesarios para determinar preferencias y/o hábitos de consumo</li>
                        <li>Boletines y comunicados sobre nuestra organización</li>
                        <li>Archivo de registros de relación contractual para servicios futuros</li>
                        <li>Gestión financiera, facturación y cobro</li>
                        <li>Dar cumplimiento a las obligaciones que hemos contraído con usted</li>
                    </ul>
                    <p>
                        <strong>
                            Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales:
                        </strong>
                    </p>
                    <ul>
                        <li>Nombre completo</li>
                        <li>Fecha de nacimiento</li>
                        <li>Género</li>
                        <li>Teléfono fijo y/o celular (Considerado como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares)</li>
                        <li>Correo electrónico</li>
                        <li>ID de Facebook o Twitter y/o LinkedIn</li>
                        <li>Dirección (Comercial y/o Fiscal</li>
                        <li>RFC y/o CURP</li>
                        <li>Datos Fiscales y Comerciales</li>
                        <li> Información financiera y de Recursos Humanos que se utilice para las evaluaciones de impacto realizadas por Hackrhub S.A.S.</li>
                    </ul>
                    <p>
                        Para recabar datos personales de nuestros usuarios podemos requerir la utilización de medios como los cookies (fragmentos de información que se almacenan en el disco duro del visitante de una página web a través de su modo a petición del servidor de la página, la cual puede ser luego recuperada por el servidor en posteriores visitas) y/o web/beacons (imágenes gráficas transparentes, colocadas en una página web o en un email y que es usado para monitorear el comportamiento de un visitante), las cuales pueden ser deshabilitadas por usted a través de los procedimientos determinados y establecidos para tal efecto según el sistema operativo que utilice.
                    </p>
                    <p>Nos reservamos el derecho de transferir los datos recabados para que sean tratados por terceras personas diferentes a la sociedad que desarrollen actividades iguales, afines o similares.</p>
                    <p>Usted tiene el derecho de acceder a sus datos personales que poseemos y a los detalles del tratamiento de los mismos, así como a rectificarlos en caso de ser inexactos o instruirnos cancelarlos cuando considere que resulten ser excesivos o innecesarios para las finalidades que justificaron su obtención u oponerse al tratamiento de los mismos para fines específicos.  Para ello, es necesario que envíe la solicitud en los términos que marca la Ley en su Art. 29 a Hackrhub S.A.S., responsable de nuestro Departamento de Protección de Datos Personales o bien vía correo electrónico a hola@hackrhub.com, el cual solicitamos confirme vía telefónica para garantizar su correcta recepción.</p>
                    <p>En caso de que no obtengamos su oposición expresa para que sus datos personales sean tratados con estas finalidades entenderemos que ha otorgado su consentimiento en forma tácita para ello.</p>
                    <p>Si después de haber ejercido sus Derechos ARCO ante Hackrhub S.A.S. por medio de los mecanismos establecidos en este Aviso de Privacidad, usted considera que la respuesta ha sido insatisfactoria o incompleta; o presume que su derecho de protección de datos personales ha sido lesionado por alguna conducta o acción de nuestra parte; o cuenta con evidencia de que en el tratamiento de sus datos personales existe alguna violación a las disposiciones previstas en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, podrá interponer la queja o denuncia correspondiente ante el IFAI. Para mayor información visite: www.ifai.org.mx</p>
                    <p>Fecha de modificación 12 Noviembre, 2016 21:03 PM</p>
                    <p>Para mayor información puede consultar la siguiente liga: http://inicio.ifai.org.mx/Publicaciones/01GuiaPracticaEjercerelDerecho.pdf</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div id="success" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">¡Gracias {{ session('success') }}!</h4>
                </div>
                <div class="modal-body text-center" style="margin-top: 15px; font-size: 17px;">
                    <p>Te hemos registrado correctamente.</p>
                    <p>Estamos trabajando muy duro para cumplir tus expectativas, agradecemos la confianza que nos has tenido y te prometemos lo siguiente:</p>
                    <p>No vamos a decepcionarte</p>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
    @if (session('success'))
        <script>
            $('#success').modal('show');
        </script>
    @endif
@endsection