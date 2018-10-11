@extends('layouts.app')

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-bordered table-condensed table-hover table-responsive table-striped">
				<caption>Solped #{{ $solped }} de {{ $empresa }}</caption>
				<tr>
					<th>Empresa:</th>
					<td>{{ $empresa }}</td>
					<th>Solped:</th>
					<td>#{{ $solped }}</td>
					<th>Total Posiciones:</th>
					<td>10</td>
					<th>Monto Total (USD):</th>
					<td>89.500,00</td>
				</tr>
				<tr>
					<th>Liberación:</th>
					<td>26/07/2017</td>
					<th>Petición de Oferta:</th>
					<td>30/05/2017</td>
					<th>Tope de Entrega de Oferta:</th>
					<td>07/06/2017</td>
					<th>Liberación Total de Pedido:</th>
					<td>16/08/2017</td>
				</tr>
				<tr>
					<th>Descripción:</th>
					<td colspan="7
					">MATERIALES ELECTRICOS, SEGUN LISTADO DEL MRP MARZO 2017.</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table id="datatable" class="table table-striped table-bordered jambo_table">
				<caption>Posiciones de la Solped #{{ $solped }} de {{ $empresa }}</caption>
				<thead>
					<tr>
						<th>Posición</th>
						<th>Descripción</th>
						<th>Precio (USD)</th>
						<th>Cantidad</th>
						<th>Total (USD)</th>
						<th>Envio Petición Oferta</th>
						<th>Tope de Entrega</th>
						<th>Pedido</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>#00010</td>
						<td>CONECTOR PERNO PARTIDO STD, AWG 4,5 MAX.</td>
						<td>100,00</td>
						<td>481</td>
						<td>48.100,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					<tr>
						<td>#00020</td>
						<td>CONECTOR BIMETALICO KSU-22, CABLE AWG 2</td>
						<td>15,00</td>
						<td>60</td>
						<td>900,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					<tr>
						<td>#00030</td>
						<td>ESMALTE ROJO CLYPTAL ENAMEL 1201 SELLADO</td>
						<td>300,00</td>
						<td>11</td>
						<td>3.300,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					<tr>
						<td>#00040</td>
						<td>TY-RAP NEGRO 9CM LARGO, 2.5MM ESPESOR</td>
						<td>10,00</td>
						<td>1.200</td>
						<td>12.000,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					<tr>
						<td>#00050</td>
						<td>RELE 12 V. DE UN CONTACTO  NA/NC. 40A,</td>
						<td>200,00</td>
						<td>30</td>
						<td>6.000,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					<tr>
						<td>#00060</td>
						<td>RELE 24 V. DE UN CONTACTO NA/NC. 40A</td>
						<td>300,00</td>
						<td>30</td>
						<td>9.000,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					<tr>
						<td>#00070</td>
						<td>BAR SOLDER, Nº. 1, 50 PCT,1-1/2 LBS</td>
						<td>100,00</td>
						<td>12</td>
						<td>1.200,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					<tr>
						<td>#00080</td>
						<td>BARRA DE ALEACIÓN DE ESTAÑO-PLOMO 60-40</td>
						<td>30,00</td>
						<td>20</td>
						<td>600,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					<tr>
						<td>#00090</td>
						<td>ROLLOS DE ESTANOS</td>
						<td>120,00</td>
						<td>20</td>
						<td>2.400,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					<tr>
						<td>#00100</td>
						<td>VARILLA, PARA SOLDAR CON GAS NCG 2 GRADO</td>
						<td>300,00</td>
						<td>20</td>
						<td>6.000,00</td>
						<td>01/01/2017</td>
						<td>01/01/2017</td>
						<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Ver Pedido</button></td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 text-center">
			{{-- <a href="{{ url()->previous() }}" class="btn btn-default">Volver</a> --}}
            <a href="{{ route('solped.index', $empresa) }}" class="btn btn-default">Volver a las Solicitudes de {{ $empresa }}</a>

		</div>
		<br/><br/><br/>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Pedido #4500043687 de {{ $empresa }}</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12">
							<table class="table table-hover table-bordered table-condensed table-striped">
								<tr>
									<th>Empresa: </th>
									<td>{{ $empresa }}</td>
									<th>Solped: </th>
									<td>#0010052465</td>
									<th>Pedido:</th>
									<td>#4500043687</td>
									<th>Monto(USD):</th>
									<td>89.500,00</td>
								</tr>
								<tr>
									<th>Descripción: </th>
									<td colspan="7">CONECTOR PERNO PARTIDO STD, AWG 4,5 MAX.</td>
								</tr>
								<tr>
									<th>Proveedor:</th>
									<td colspan="3">SQUARE BUSINESS CONSULTI</td>
									<th>Creación: </th>
									<td>16/08/2017</td>
									<th>Liberación:</th>
									<td>16/08/2017</td>
								</tr>
							</table>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<table id="datatable" class="table table-striped table-bordered table-condensed">
							<thead>
								<tr>
									<th>Posición</th>
									<th>Descripción</th>
									<th>Precio (USD)</th>
									<th>Cantidad</th>
									<th>Total (USD)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>#00010</td>
									<td>CONECTOR PERNO PARTIDO STD, AWG 4,5 MAX.</td>
									<td>100,00</td>
									<td>481</td>
									<td>48.100,00</td>
								</tr>
								<tr>
									<td>#00020</td>
									<td>CONECTOR BIMETALICO KSU-22, CABLE AWG 2</td>
									<td>15,00</td>
									<td>60</td>
									<td>900,00</td>
								</tr>
								<tr>
									<td>#00030</td>
									<td>ESMALTE ROJO CLYPTAL ENAMEL 1201 SELLADO</td>
									<td>300,00</td>
									<td>11</td>
									<td>3.300,00</td>
								</tr>
								<tr>
									<td>#00040</td>
									<td>TY-RAP NEGRO 9CM LARGO, 2.5MM ESPESOR</td>
									<td>10,00</td>
									<td>1.200</td>
									<td>12.000,00</td>
								</tr>
								<tr>
									<td>#00050</td>
									<td>RELE 12 V. DE UN CONTACTO  NA/NC. 40A,</td>
									<td>200,00</td>
									<td>30</td>
									<td>6.000,00</td>
								</tr>
								<tr>
									<td>#00060</td>
									<td>RELE 24 V. DE UN CONTACTO NA/NC. 40A</td>
									<td>300,00</td>
									<td>30</td>
									<td>9.000,00</td>
								</tr>
								<tr>
									<td>#00070</td>
									<td>BAR SOLDER, Nº. 1, 50 PCT,1-1/2 LBS</td>
									<td>100,00</td>
									<td>12</td>
									<td>1.200,00</td>
								</tr>
								<tr>
									<td>#00080</td>
									<td>BARRA DE ALEACIÓN DE ESTAÑO-PLOMO 60-40</td>
									<td>30,00</td>
									<td>20</td>
									<td>600,00</td>
								</tr>
								<tr>
									<td>#00090</td>
									<td>ROLLOS DE ESTANOS</td>
									<td>120,00</td>
									<td>20</td>
									<td>2.400,00</td>
								</tr>
								<tr>
									<td>#00100</td>
									<td>VARILLA, PARA SOLDAR CON GAS NCG 2 GRADO</td>
									<td>300,00</td>
									<td>20</td>
									<td>6.000,00</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>




@endsection