@extends('adminlte::page')

@section('title', 'Carrito')

@section('content_header')
    <h1>Carrito</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color:#0F1934; text-align:center; color:white;">
                        <b>Artículos en Pesos</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 rounded border-right border-left"
                                style="text-align:center; background-color:#0E7E2D; color:white"><b>Artículo</b> </div>
                            <div class="col-3 rounded border-right border-left"
                                style="text-align:center; background-color:#0E7E2D; color:white"><b>Código</b> </div>
                            <div class="col-4 rounded border-right border-left"
                                style="text-align:center; background-color:#0E7E2D; color:white"><b>Descripción</b> </div>
                            <div class="col-2 rounded border-right border-left"
                                style="text-align:center; background-color:#0E7E2D; color:white"><b>Cant.</b> </div>
                            <div class="col-1 rounded border-right border-left"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 border rounded-left" style="text-align:center; padding:10px">SEF1-013</div>
                            <div class="col-3 border" style="text-align:center; padding:10px">0032-0012,0032-D36P</div>
                            <div class="col-4 border" style="text-align:center; padding:10px">MANDIL DE MEZCLILLA REFORZADO
                            </div>
                            <div class="col-2 border" style="text-align:center; padding:10px"><input style="text-align:center"
                                    class="form-control" type="number" value="5" data-toggle="popover"
                                    title="Cantidades" data-content="Si desea puede modificar las cantidades requeridas">
                            </div>
                            <div class="col-1 border rounded-right" style="text-align:center; padding:10px"><button
                                    class="btn btn-danger"><i class="fas fa-times"></i></button></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="">
                        <div class="col-6"></div>
                        <div class="col-3" style="text-align:left; margin-left:10px; margin-top:10px"><label
                            class="">Importe Total Pesos: <b style="color:blue"></b></label>
                        </div>
                        <div class="col-2" style="text-align:right; margin-right:10px">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span style="font-weight:bold; color:blue" class="input-group-text">$</span>
                                    </div>
                                    <input type="text" style="font-weight:bold; color:blue" value="249.23" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
                                  </div> </div>
                    </div>





                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color:#0F1934; text-align:center; color:white;">
                        <b>Artículos en Dolares</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 rounded border-right border-left"
                                style="text-align:center; background-color:#0E7E2D; color:white"><b>Artículo</b> </div>
                            <div class="col-3 rounded border-right border-left"
                                style="text-align:center; background-color:#0E7E2D; color:white"><b>Código</b> </div>
                            <div class="col-4 rounded border-right border-left"
                                style="text-align:center; background-color:#0E7E2D; color:white"><b>Descripción</b> </div>
                            <div class="col-2 rounded border-right border-left"
                                style="text-align:center; background-color:#0E7E2D; color:white"><b>Cant.</b> </div>
                            <div class="col-1 rounded border-right border-left"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 border rounded-left" style="text-align:center; padding:10px;">SGG2-037</div>
                            <div class="col-3 border" style="text-align:center; padding:10px;">D382-1CHW</div>
                            <div class="col-4 border" style="text-align:center; padding:10px;">GUANTE DE NYLON REC. DE NITRILO EN PALMA Y DORSO MOD.1400 SAFE FIT [6]
                            </div>
                            <div class="col-2 border" style="text-align:center; padding:10px;"><input style="text-align:center"
                                    class="form-control" type="number" value="100" data-toggle="popover"
                                    title="Cantidades" data-content="Si desea puede modificar las cantidades requeridas">
                            </div>
                            <div class="col-1 border rounded-right" style="text-align:center; padding:10px;"><button
                                    class="btn btn-danger"><i class="fas fa-times"></i></button></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="">
                        <div class="col-6"></div>
                        <div class="col-3" style="text-align:left; margin-left:10px; margin-top:10px"><label
                            class="">Importe Total Dolares: <b style="color:blue"></b></label>
                        </div>
                        <div class="col-2" style="text-align:right; margin-right:10px">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span style="font-weight:bold; color:blue" class="input-group-text">$</span>
                                    </div>
                                    <input type="text" style="font-weight:bold; color:blue" value="172.23" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
                                  </div> </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4"><a href="" style="float:right" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal"> Continuar con la compra</a></div>

        </div><br>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#0E7E2D">
            <center>
                <h5 class="modal-title" id="exampleModalLabel" style="color:white">Confirmando compra...</h5>
            </center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color:white">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col"><b><div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-chart-area"></i>&nbsp;| Departamento</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option value="">203 General Manager</option>

                    </select>
                  </div></b></div>

            </div><hr>
            <div class="row">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-users-cog"></i>&nbsp;| Equipo/Trabajo</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Selecciona un equipo...</option>
                      <option value="1">E0022-GC</option>
                    </select>
                  </div>
            </div><hr>
            <div class="row">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-truck"></i>&nbsp;| Envio</label>
                    </div>
                    <input  class="form-control" type="text">
                  </div>
            </div><hr>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <a href="{{route('postcompra')}}" type="button" class="btn btn-primary">Confirmar</a>
        </div>
      </div>
    </div>
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
