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
                <caption>Detalle por Empresa</caption>
                <thead>
                    <tr>
                        <th rowspan="2">Empresa</th>
                        <th rowspan="2">Presupuestado (USD)</th>
                        <th rowspan="2">Disponible (USD)</th>
                        <th rowspan="2">Solicitudes</th>
                        <th colspan="2">Apartado</th>
                        <th colspan="2">Causado</th>
                        <th colspan="2">Comprometido</th>
                        <th colspan="2">Pagado</th>
                    </tr>
                    <tr>
                        <th>Cantidad</th>
                        <th>Monto (USD)</th>
                        <th>Cantidad</th>
                        <th>Monto (USD)</th>
                        <th>Cantidad</th>
                        <th>Monto (USD)</th>
                        <th>Cantidad</th>
                        <th>Monto (USD)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Empresa A</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa A') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa B</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa B') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa C</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa C') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa D</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa D') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa E</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa E') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa F</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa F') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa G</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa G') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa H</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa H') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa I</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa I') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa J</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa J') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa K</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa K') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa L</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa L') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa M</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa M') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa N</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa N') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa Ñ</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa Ñ') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa O</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa O') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa P</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa P') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa Q</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa Q') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa R</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa R') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa S</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa S') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa T</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa T') }}">409</a></td>
                        <td>227</td>
                        <td>409.090,00</td>
                        <td>113</td>
                        <td>318.181,00</td>
                        <td>45</td>
                        <td>227.272,00</td>
                        <td>22</td>
                        <td>136.363,00</td>
                    </tr>
                    <tr>
                        <td>Empresa U</td>
                        <td>1.363.636,36</td>
                        <td>272.454,27</td>
                        <td><a href="{{ route('solped.index', 'Empresa U') }}">411</a></td>
                        <td>233</td>
                        <td>409,110.00</td>
                        <td>127</td>
                        <td>318,199.00</td>
                        <td>55</td>
                        <td>227,288.00</td>
                        <td>38</td>
                        <td>136,377.00</td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Totales: </th>
                        <th>30.000.000,00</th>
                        <th>6.000.000,00</th>
                        <th>9.000</th>
                        <th>5.000</th>
                        <th>9.000.000,00</th>
                        <th>2.500</th>
                        <th>7.000.000,00</th>
                        <th>1.000</th>
                        <th>5.000.000,00</th>
                        <th>500</th>
                        <th>3.000.000,00</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <a href="{{ route('grafica.index') }}" class="btn btn-default">Volver a la Gráfica</a>
        </div>
        <br/><br/><br/>
    </div>
</div>
@endsection