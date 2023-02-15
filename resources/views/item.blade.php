@extends('adminlte::page')

@section('title', 'Inicio')

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

@section('content_header')

@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success mb-3">
                        <center>
                            <b> CASCO BLANCO DE SEGURIDAD MOD FEATHER CAP WILSON </b>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <center>
                                    <img class="border rounded" src="img/productos/casco-blanco.jpg" alt="casco" style="width:350px">
                                </center>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <table class="table table-striped rounded">
                                    <tr>
                                        <td class="border"><b>Articulo:</b></td>
                                        <td class="border" style="text-align:right">SEG5-001</td>
                                    </tr>
                                    <tr>
                                        <td class="border"><b>Codigo:</b></td>
                                        <td class="border" style="text-align:right">0546-008,0628-0011</td>
                                    </tr>
                                    <tr>
                                        <td class="border"><b>Disponible:</b></td>
                                        <td class="border" style="text-align:right">92 pza</td>
                                    </tr>
                                    <tr>
                                        <td class="border"><b>Precio:</b></td>
                                        <td class="border" style="text-align:right">$6.60 Dolares</td>
                                    </tr><br>

                                </table>
                                <hr>
                                <div class="rounded" style="background-color:red">
                                    <center>
                                        <h3 style="color:white">Budget</h3>
                                    </center>
                                </div>


                                <table class="table table-striped rounded">
                                    <tr>
                                        <td class="border"> <b>Lapso de entrega:</b> </td>
                                        <td class="border" style="text-align:right">Semanal</td>
                                    </tr>
                                    <tr>
                                        <td class="border"> <b>From:</b> </td>
                                        <td class="border" style="text-align:right">lun. 13-feb.-2023</td>
                                    </tr>
                                    <tr>
                                        <td class="border"> <b>To:</b> </td>
                                        <td class="border" style="text-align:right">dom.19-feb.-2023</td>
                                    </tr>
                                </table>
                                <div class="row">
                                    <div class="col-4 border rounded" style="text-align:center; background-color:#0F1934; color:white"> <b> Authorized</b></div>
                                    <div class="col-4 border rounded" style="text-align:center; background-color:#0F1934; color:white"> <b> Required</b></div>
                                    <div class="col-4 border rounded" style="text-align:center; background-color:#0F1934; color:white"> <b> Remaining</b></div>
                                </div>
                                <div class="row">
                                    <div class="col-4 border rounded" style="text-align:center; font-size:1.5em; color:blue"><b>3</b></div>
                                    <div class="col-4 border rounded" style="text-align:center; font-size:1.5em; color:green"><b>3</b></div>
                                    <div class="col-4 border rounded" style="text-align:center; font-size:1.5em"><b>0</b> </div>
                                </div>

                                <hr>
                                <br>
                                <b>Cantidad:</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <input class="input-group-text" id="inputGroup-sizing-default" type="number"
                                            value="0">
                                    </div>
                                    <span class="form-control" aria-describedby="inputGroup-sizing-default">pza</span>
                                </div><br>
                                <center>
                                    <a href="{{route('carrito')}}" class="btn btn-success btn-lg"><i class="fas fa-shopping-cart"></i> |
                                        Comprar</a>
                                </center>


                            </div>
                        </div>
                    </div>
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
