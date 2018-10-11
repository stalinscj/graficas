@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Gráficas de Muestra Stalin</div>

                <div class="panel-body">

                    <ul class="">
                        <li><a href="{{ route('grafica.index') }}"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Ver Gráficas</a></li>
                        <li><a href="{{ route('empresa.index') }}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Ver Detalle</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
