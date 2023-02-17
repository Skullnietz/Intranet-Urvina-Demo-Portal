@extends('adminlte::page')

@section('title', 'Catalogo')

@section('content_header')
<div class="container">
    <div class="row">
        <div class="col-6"><h1>Catalogo</h1></div>
        <div class="col-6"> <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
          </div></div>
    </div>
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

@section('content')

<div class="card">
<div class="card-body"><table id="catalogo" class="display table">
    <thead class="">
        <tr class="bg-success">

           <th style="text-align: center;">Categorias</th>
        <tr>
    </thead>
    <tbody>

    <tr>   <td><a href="{{route('categoria')}}">Seguridad Calzado Borcegui</a></td></tr>
    <tr>  <td><a href="{{route('categoria')}}"> Seguridad Calzado Botas</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}"> Seguridad Calzado Choclo</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}"> Seguridad Equipo de Proteccion Altura</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}"> Seguridad Equipo de Proteccion Auditivo</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}"> Seguridad Equipo de Proteccion Brazos y Manos</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}"> Seguridad Equipo de Proteccion Cabeza</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}"> Seguridad Equipo de Proteccion Ocular</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}"> Seguridad Equipo de Proteccion Piernas y Pies</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}">  Seguridad Equipo de Proteccion Respiratorio</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}">  Seguridad Equipo de Proteccion Torax</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}">  Seguridad Equipo de Proteccion Varios</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}">  Seguridad Guantes Combinados</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}">  Seguridad Guantes Recubiertos</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}">  Seguridad Guantes Sinteticos</a></td></tr>
    <tr> <td><a href="{{route('categoria')}}">  Seguridad Guantes Tejidos</a></td></tr>
    <tr>  <td><a href="{{route('categoria')}}"> Seguridad Manejo de Derrames y Residuos Peligrosos Emergencias</a></td></tr>
    <tr>  <td><a href="{{route('categoria')}}"> Seguridad Manejo de Derrames y Residuos Peligrosos Recipientes</a></td></tr>
    <tr>  <td><a href="{{route('categoria')}}"> Seguridad Ropa de Proteccion Impermeables</a></td></tr>
    <tr>  <td><a href="{{route('categoria')}}"> Seguridad Ropa de Proteccion Overoles</a></td></tr>
    <tr>  <td><a href="{{route('categoria')}}"> Seguridad Uniformes Camisa/Blusa</a></td></tr>
    <tr>  <td><a href="{{route('categoria')}}"> Seguridad Uniformes Pantalones</a></td></tr>
    <tr>  <td><a href="{{route('categoria')}}"> Seguridad Uniformes Playeras</a></td></tr>

    </tbody>

</table></div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
@stop

@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script> $(document).ready( function () {
        $('#catalogo').DataTable({language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },});
    } );
    </script>
@stop
