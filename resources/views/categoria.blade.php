@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <h1>Categoria</h1>
@stop

@section('right-sidebar')

    <div class="container">
        <center>
            <br>
            <h3>Contacto</h3>
            <br><br>
            <div class="card">

                <a href="">
                    <div class="card-body"><i class="fas fa-user"></i><br>
                        <b>Hugo Reyna</b>
                </a>
                <hr><br>
                <a href="">
                    <i class="fas fa-phone"></i><br>
                    <b>884 439 3695</b>
                </a>
                <hr><br>
                <a href="">
                    <i class="fas fa-envelope"></i><br>
                    <small>almacen.saltillo@urvina.com.mx</small>
                </a>
            </div>
    </div>
    </div>
    </center>


@stop

@section('content')
<style>
    .grow {
        transition: 1s ease;
    }

    .grow:hover{
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
            transition: 1s ease;
            z-index:2;
    }
    a {
  color: inherit; /* blue colors for links too */
  text-decoration: inherit; /* no underline */
}
</style>
    <div class="card">
        <div class="card-header bg-success mb-3">
            <center>
                <b>SEGURIDAD EQUIPO DE PROTECCION CABEZA</b>
            </center>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6 col-xs-12" >
                    <a href="{{route('item')}}" >
                    <div class="card grow">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-3"><img src="img/productos/casco-blanco.jpg" alt="" srcset=""
                                        style="width:100px"></div>
                                <div class="col-7"><small><b>Casco Blanco de Seguridad Modfeather CAP WILSON
                                        </b></small><br>
                                    <small>SEG1-005</small><br>
                                    <small style="color:blue;"><b><a href="">0413-0003</a></b></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-md-6 col-xs-12" >
                    <a href="{{route('item')}}" >
                    <div class="card grow" >
                        <div class="card-body">
                            <div class="row" style="height:100px">
                                <div class="col-3"><img src="img/productos/casco-impacto-electrico.jpg" alt=""
                                        srcset="" style="width:100px"></div>
                                <div class="col-7"><small><b>Casco Alto Impacto Dielectrico Mod.600 PRONOSA</b></small><br>
                                    <small>SEG1-005</small><br>
                                    <small style="color:blue;"><b><a href="">0413-0003</a></b></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>


        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
