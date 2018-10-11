@extends('layouts.app')

@section('css')
	<style type="text/css">
		.panel-title:hover{
			cursor: pointer;
			text-decoration: underline;
		}
	</style>
@endsection

@section('contenido')
	<h1 class="text-center">Gráficas de Empresas</h1>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div id="grafica1" style="min-width: 310px; height: 300px;"></div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div id="grafica2" style="min-width: 310px; height: 300px;"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div id="grafica3" style="min-width: 310px; height: 300px;"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div id="grafica4" style="min-width: 310px; height: 300px;"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div id="grafica5" style="min-width: 310px; height: 300px;"></div>
			</div>
		</div>

		<h3 class="text-center">Cantidad de Solicitudes por Empresa <a href="{{ route('empresa.index') }}" class="label label-primary">Ver detalle</a></h3>

		<div class="panel-group" role="tablist">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title" data-target="#collapse1" onclick="mostrarOcultar(this)">Empresa A - Empresa B - Empresa C</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in" aria-expanded="true">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div id="grafica6" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica7" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica8" style="min-width: 310px; height: 300px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title" data-target="#collapse2" onclick="mostrarOcultar(this)">Empresa D - Empresa E - Empresa F</h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div id="grafica9" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica10" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica11" style="min-width: 310px; height: 300px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title" data-target="#collapse3" onclick="mostrarOcultar(this)">Empresa G - Empresa H - Empresa I</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div id="grafica12" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica13" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica14" style="min-width: 310px; height: 300px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title" data-target="#collapse4" onclick="mostrarOcultar(this)">Empresa J - Empresa K - Empresa L</h4>
				</div>
				<div id="collapse4" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div id="grafica15" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica16" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica17" style="min-width: 310px; height: 300px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title" data-target="#collapse5" onclick="mostrarOcultar(this)">Empresa M - Empresa N - Empresa Ñ</h4>
				</div>
				<div id="collapse5" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div id="grafica18" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica19" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica20" style="min-width: 310px; height: 300px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title" data-target="#collapse6" onclick="mostrarOcultar(this)">Empresa O - Empresa P - Empresa Q</h4>
				</div>
				<div id="collapse6" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div id="grafica21" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica22" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica23" style="min-width: 310px; height: 300px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title" data-target="#collapse7" onclick="mostrarOcultar(this)">Empresa R - Empresa S - Empresa T</h4>
				</div>
				<div id="collapse7" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div id="grafica24" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica25" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="grafica26" style="min-width: 310px; height: 300px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title" data-target="#collapse8" onclick="mostrarOcultar(this)">Empresa U</h4>
				</div>
				<div id="collapse8" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div id="grafica27" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="graficaXX" style="min-width: 310px; height: 300px;"></div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div id="graficaXXX" style="min-width: 310px; height: 300px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<!-- Bootstrap JS 3.3.7-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Hihgcharts JS-->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/drilldown.js"></script>

	<script type="text/javascript">

		function mostrarOcultar(panelHeader) {
			var id = $(panelHeader).attr('data-target');
			var panelBody = $(id);

			if(panelBody.hasClass('in')){
				panelBody.collapse('hide');
			}else{
				panelBody.collapse('show');
			}
		}

		Highcharts.setOptions({
		    lang: {
		        decimalPoint: ',',
		        thousandsSep: '.'
		    }
		});

		Highcharts.chart('grafica1', {
		    chart: {
		        type: 'column'
		    },
		    title: {
		        text: 'Gráfica #1'
		    },
		    xAxis: {
		        categories: [
		            'Estados Presupuestarios',
		        ],
		        crosshair: true
		    },
		    yAxis: {
		        title: {
		            text: 'Monto (USD)'
		        }

		    },
		    legend: {
		        enabled: true
		    },
		    plotOptions: {
		        series: {
		            borderWidth: 0,
		            dataLabels: {
		                enabled: true,
		                format: '{point.y:,.2f}'
		            },
        			groupPadding: 0,
		        }
		    },

		    tooltip: {
		        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		            '<td style="padding:0"><b>{point.y:,.2f} USD</b></td></tr>',
		        footerFormat: '</table>',
		        useHTML: true
		    },

		    series: [{
		    	name: 'Presupuestado',
		    	data: [30000000.00],
		    	color:  "#2b908f",
		    }, {
		    	name: 'Disponible',
		    	data: [6000000.00],
		    	color: "#f45b5b",
		    }, {
		        name: 'Apartado',
		        data: [9000000.00],
		    }, {
		        name: 'Causado',
		        data: [7000000.00]

		    }, {
		        name: 'Comprometido',
		        data: [5000000.00]

		    }, {
		        name: 'Pagado',
		        data: [3000000.00]

		    }],
		});
	
		Highcharts.chart('grafica2', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Gráfica #2'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    	
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 5000,
		        }, {
		            name: 'Causado',
		            y: 2500,
		        }, {
		            name: 'Comprometido',
		            y: 1000,
		        }, {
		            name: 'Pagado',
		            y: 500,
		        }]
		    }]
		});

		Highcharts.chart('grafica3', {
		    chart: {
		        type: 'column'
		    },
		    title: {
		        text: 'Resumen por Empresa 1/3'
		    },
		    xAxis: {
		        categories: [
		            'Empresa A',
		            'Empresa B',
		            'Empresa C',
		            'Empresa D',
		            'Empresa E',
		            'Empresa F',
		            'Empresa G',
		        ],
		        crosshair: true
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: 'Monto (USD)'
		        }
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		            '<td style="padding:0"><b>{point.y:,.2f} USD</b></td></tr>',
		        footerFormat: '</table>',
		        shared: true,
		        useHTML: true
		    },
		    plotOptions: {
		        column: {
		            pointPadding: 0.2,
		            borderWidth: 0
		        }
		    },
		    series: [{
		    	name: 'Presupuestado',
		    	data: [1363636.36, 1363636.36, 1363636.36, 1363636.36, 1363636.36, 1363636.36, 1363636.36],
		    	color:  "#2b908f",
		    }, {
		    	name: 'Disponible',
		    	data: [272454.27, 272454.27, 272454.27, 272454.27, 272454.27, 272454.27, 272454.27],
		    	color: "#f45b5b",
		    }, {
		        name: 'Apartado',
		        data: [ 409090.9, 409090.9, 409090.9, 409090.9, 409090.9, 409090.9, 409090.9],
		    }, {
		        name: 'Causado',
		        data: [ 318181.8, 318181.8, 318181.8, 318181.8, 318181.8, 318181.8, 318181.8]

		    }, {
		        name: 'Comprometido',
		        data: [ 227272.7, 227272.7, 227272.7, 227272.7, 227272.7, 227272.7, 227272.7]

		    }, {
		        name: 'Pagado',
		        data: [ 136363.6, 136363.6, 136363.6, 136363.6, 136363.6, 136363.6, 136363.6]

		    }]
		});
		
		Highcharts.chart('grafica4', {
		    chart: {
		        type: 'column'
		    },
		    title: {
		        text: 'Resumen por Empresa 2/3'
		    },
		    xAxis: {
		        categories: [
		            'Empresa H',
		            'Empresa I',
		            'Empresa J',
		            'Empresa K',
		            'Empresa L',
		            'Empresa M',
		            'Empresa N',
		        ],
		        crosshair: true
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: 'Monto (USD)'
		        }
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		            '<td style="padding:0"><b>{point.y:,.2f} USD</b></td></tr>',
		        footerFormat: '</table>',
		        shared: true,
		        useHTML: true
		    },
		    plotOptions: {
		        column: {
		            pointPadding: 0.2,
		            borderWidth: 0
		        }
		    },
		    series: [{
		    	name: 'Presupuestado',
		    	data: [1363636.36, 1363636.36, 1363636.36, 1363636.36, 1363636.36, 1363636.36, 1363636.36],
		    	color:  "#2b908f",
		    }, {
		    	name: 'Disponible',
		    	data: [272454.27, 272454.27, 272454.27, 272454.27, 272454.27, 272454.27, 272454.27],
		    	color: "#f45b5b",
		    }, {
		        name: 'Apartado',
		        data: [409090.9, 409090.9, 409090.9, 409090.9, 409090.9, 409090.9, 409090.9]

		    }, {
		        name: 'Causado',
		        data: [318181.8, 318181.8, 318181.8, 318181.8, 318181.8, 318181.8, 318181.8]

		    }, {
		        name: 'Comprometido',
		        data: [227272.7, 227272.7, 227272.7, 227272.7, 227272.7, 227272.7, 227272.7]

		    }, {
		        name: 'Pagado',
		        data: [136363.6, 136363.6, 136363.6, 136363.6, 136363.6, 136363.6, 136363.6]

		    }]
		});

		Highcharts.chart('grafica5', {
		    chart: {
		        type: 'column'
		    },
		    title: {
		        text: 'Resumen por Empresa 3/3'
		    },
		    xAxis: {
		        categories: [
		            'Empresa Ñ',
		            'Empresa O',
		            'Empresa P',
		            'Empresa Q',
		            'Empresa R',
		            'Empresa S',
		            'Empresa T',
		            'Empresa U',
		        ],
		        crosshair: true
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: 'Monto (USD)'
		        }
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		            '<td style="padding:0"><b>{point.y:,.2f} USD</b></td></tr>',
		        footerFormat: '</table>',
		        shared: true,
		        useHTML: true
		    },
		    plotOptions: {
		        column: {
		            pointPadding: 0.2,
		            borderWidth: 0
		        }
		    },
		    series: [{
		    	name: 'Total',
		    	data: [1090909.09, 1090909.09, 1090909.09, 1090909.09, 1090909.09, 1090909.09, 1090909.09, 1090909.09],
		    	color:  "#2b908f",
		    }, {
		    	name: 'Disponible',
		    	data: [272454.27, 272454.27, 272454.27, 272454.27, 272454.27, 272454.27, 272454.27, 272454.27,],
		    	color: "#f45b5b",
		    }, {
		        name: 'Apartado',
		        data: [409090.9, 409090.9, 409090.9, 409090.9, 409090.9, 409090.9, 409090.9, 409090.9]

		    }, {
		        name: 'Causado',
		        data: [318181.8, 318181.8, 318181.8, 318181.8, 318181.8, 318181.8, 318181.8, 318181.8]

		    }, {
		        name: 'Comprometido',
		        data: [227272.7, 227272.7, 227272.7, 227272.7, 227272.7, 227272.7, 227272.7, 227272.7]

		    }, {
		        name: 'Pagado',
		        data: [136363.6, 136363.6, 136363.6, 136363.6, 136363.6, 136363.6, 136363.6, 136363.6]

		    }]
		});

		Highcharts.chart('grafica6', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa A'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica7', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa B'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica8', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa C'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica9', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa D'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica10', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa E'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica11', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa F'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica12', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa G'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica13', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa H'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica14', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa I'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica15', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa J'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica16', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa K'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica17', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa L'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica18', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa M'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica19', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa N'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica20', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa Ñ'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica21', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa O'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica22', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa P'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica23', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa Q'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica24', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa R'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica25', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa S'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica26', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa T'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

		Highcharts.chart('grafica27', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: 'Empresa U'
		    },
		    plotOptions: {
		        series: {
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}: {point.y:,.0f}'
		            }
		        },
		    },
		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
		    },
		    series: [{
		        name: 'Estados',
		        colorByPoint: true,
		        data: [{
		            name: 'Apartado',
		            y: 227,
		        }, {
		            name: 'Causado',
		            y: 113,
		        }, {
		            name: 'Comprometido',
		            y: 45,
		        }, {
		            name: 'Pagado',
		            y: 22,
		        }]
		    }]
		});

	</script>

@endsection