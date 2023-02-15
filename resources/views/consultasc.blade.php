@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Consultas Cliente</h1>
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
    <p>Vista Consultas Cliente</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
