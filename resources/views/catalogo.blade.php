@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Catalogo</h1>
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
