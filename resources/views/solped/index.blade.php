@extends('layouts.app')

@section('css')
    <style type="text/css">
        th{
            vertical-align: middle !important;
            text-align: center;
        }
    </style>
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <table id="datatable" class="table table-striped table-bordered table-hover table-condensed">
                <caption>Macro Estatus de {{ $empresa }}</caption>
                <thead>
                    <tr>
                        <th rowspan="2">Macro Estatus</th>
                        <th colspan="2">Empresa ?</th>
                        <th colspan="3">Tiempos Macro Estatus</th>
                    </tr>
                    <tr>
                        <th>Solicitudes</th>
                        <th>Días</th>
                        <th>Verde <span class="label label-success"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span></th>
                        <th>Amarillo <span class="label label-warning"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span></th>
                        <th>Rojo <span class="label label-danger"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Liberación</td>
                        <td>50</td>
                        <td><span class="label label-success">2</span></td>
                        <td>1 - 2 días</td>
                        <td>3 días</td>
                        <td> &gt; 3 días</td>
                    </tr>
                    <tr>
                        <td>Asignar Comprador</td>
                        <td>50</td>
                        <td><span class="label label-warning">3</span></td>
                        <td>1 - 2 días</td>
                        <td>3 días</td>
                        <td> &gt; 3 días</td>
                    </tr>
                    <tr>
                        <td>Solicitud de Oferta</td>
                        <td>100</td>
                        <td><span class="label label-danger">16</span></td>
                        <td>1 - 10 días</td>
                        <td>11 - 15 días</td>
                        <td> &gt; 15 días</td>
                    </tr>
                    <tr>
                        <td>Recepción de Oferta</td>
                        <td>200</td>
                        <td><span class="label label-warning">9</span></td>
                        <td>1 - 7 días</td>
                        <td>8 - 10 días</td>
                        <td> &gt; 10 días</td>
                    </tr>
                    <tr>
                        <td>Liberación</td>
                        <td>300</td>
                        <td><span class="label label-success">17</span></td>
                        <td>1 - 20 días</td>
                        <td>21 - 30 días</td>
                        <td> &gt; 30 días</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- <br> --}}
    <div class="row">
        <div class="col-xs-12">
            <table id="datatable" class="table table-striped table-bordered jambo_table">
                <caption>Solicitudes de {{ $empresa }}</caption>
                <thead>
                    <tr>
                        <th>Solped</th>
                        <th>Monto (USD)</th>
                        <th>Posiciones</th>
                        <th>Liberación</th>
                        <th>Asignar Comprador</th>
                        <th>Solicitud de Oferta</th>
                        <th>Recepción de Oferta</th>
                        <th>Creación de Pedido</th>
                        <th>Total Días</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#0010052465</td>
                        <td>89.500,00</td>
                        <td><a href="{{ route('posicion.index', [$empresa, "0010052465"]) }}">10</a></td>
                        <td><span class="label label-success">1 día</span></td>
                        <td><span class="label label-warning">3 días</span></td>
                        <td><span class="label label-danger">16 días</span></td>
                        <td><span class="label label-success">5 días</span></td>
                        <td><span class="label label-warning">21 días</span></td>
                        <td>46</td>
                    </tr>
                    <tr>
                        <td>#0010052465</td>
                        <td>89.500,00</td>
                        <td><a href="{{ route('posicion.index', [$empresa, "0010052465"]) }}">10</a></td>
                        <td><span class="label label-success">1 día</span></td>
                        <td><span class="label label-warning">3 días</span></td>
                        <td><span class="label label-danger">16 días</span></td>
                        <td><span class="label label-success">5 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>#0010052465</td>
                        <td>89.500,00</td>
                        <td><a href="{{ route('posicion.index', [$empresa, "0010052465"]) }}">10</a></td>
                        <td><span class="label label-success">1 día</span></td>
                        <td><span class="label label-warning">3 días</span></td>
                        <td><span class="label label-danger">16 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>#0010052465</td>
                        <td>89.500,00</td>
                        <td><a href="{{ route('posicion.index', [$empresa, "0010052465"]) }}">10</a></td>
                        <td><span class="label label-success">1 día</span></td>
                        <td><span class="label label-warning">3 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>#0010052465</td>
                        <td>89.500,00</td>
                        <td><a href="{{ route('posicion.index', [$empresa, "0010052465"]) }}">10</a></td>
                        <td><span class="label label-success">1 día</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>#0010052465</td>
                        <td>89.500,00</td>
                        <td><a href="{{ route('posicion.index', [$empresa, "0010052465"]) }}">10</a></td>
                        <td><span class="label label-success">1 día</span></td>
                        <td><span class="label label-warning">3 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>#0010052465</td>
                        <td>89.500,00</td>
                        <td><a href="{{ route('posicion.index', [$empresa, "0010052465"]) }}">10</a></td>
                        <td><span class="label label-success">1 día</span></td>
                        <td><span class="label label-warning">3 días</span></td>
                        <td><span class="label label-danger">16 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td><span class="label label-default">0 días</span></td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>#0010052465</td>
                        <td>89.500,00</td>
                        <td><a href="{{ route('posicion.index', [$empresa, "0010052465"]) }}">10</a></td>
                        <td><span class="label label-success">1 día</span></td>
                        <td><span class="label label-warning">3 días</span></td>
                        <td><span class="label label-danger">16 días</span></td>
                        <td><span class="label label-success">5 días</span></td>
                        <td><span class="label label-warning">21 días</span></td>
                        <td>46</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <a href="{{ route('empresa.index') }}" class="btn btn-default">Volver al Detalle por Empresa</a>
        </div>
        <br/><br/><br/>
    </div>
</div>
@endsection