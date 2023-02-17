@extends('adminlte::page')

@section('title', 'Detalles de compra')

@section('content_header')
<div class="container">
    <div class="row">
        <div class="col-6"><h1>Detalles de compra</h1></div>
        <div class="col-6"> <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
          </div></div>
    </div>
</div>
@stop

@section('content')

    <div class="container">
         <!-- Pedido Pesos -->
            <div class="card">
                <div class="row"></div>
                <div class="col-12 "><br>
                    <center>
                        <div class="border rounded">
                            <b>Su Pedido en Pesos fué levantado correctamente con numero:</b>  <br>
                                           <b style="color:blue; font-size:25px">RAA715</b>
                        </div>
                    </center>
                    <br>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4"><a href="" class="btn btn-primary"> Cancelar</a>&nbsp;&nbsp;<a href="{{route('printpedido')}}" target="_blank" class="btn btn-primary"> Imprimir</a>&nbsp;&nbsp;<a href="" class="btn btn-primary"> Continuar</a></div>
                        <div class="col-4"></div>
                    </div>
                    <br>
                </div>
            </div>
            <!-- FIN Pedido Pesos -->
            <!-- Pedido Dolares -->

            <div class="card">
                <div class="row"></div>
                <div class="col-12 "><br>
                    <center>
                        <div class="border rounded">
                            <b>Su Pedido en Dolares fué levantado correctamente con numero:</b>  <br>
                                           <b style="color:blue; font-size:25px">RAA715</b>
                        </div>
                    </center>
                    <br>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4"><a href="" class="btn btn-primary"> Cancelar</a>&nbsp;&nbsp;<a href="{{route('printpedido')}}" target="_blank" class="btn btn-primary"> Imprimir</a>&nbsp;&nbsp;<a href="" class="btn btn-primary"> Continuar</a></div>
                        <div class="col-4"></div>
                    </div>
                    <br>
                </div>
            </div>
            <!-- FIN Pedido Dolares -->


    </div>
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
