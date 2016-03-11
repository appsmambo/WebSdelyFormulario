var participantes = {};
var ganadores = {};
var indices = [];
var size = 0;

$(function() {
	$('#fecha').datepicker({
		format:"dd/mm/yyyy",
		startDate:fechaInicio,
		endDate:fechaFin,
		language:"es",
		autoclose:true,
		todayHighlight:true
    });
	$('.input-daterange').datepicker({
		format:"dd/mm/yyyy",
		startDate:fechaInicio,
		endDate:fechaFin,
		language:"es",
		autoclose:true,
		todayHighlight:true,
		toggleActive:true
	});
	$('#consultar').click(function() {
		var fecha = $('#fecha').val();
		$.ajax({
			type:'POST',
			url:baseUrl + '/admin-registrados',
			data:'fecha='+fecha,
			success:function(data) {
				var url = baseUrl + '/admin-reporte';
				url += '/' + fecha;
				$('#reporte').attr('href', url + '/0');

				$('#datos .registros').html(data.registros);
				$('#datos').fadeIn();
				return false;
			},
			dataType:'json'
		});
	});
	$('#consultar-rango').click(function() {
		var fechaInicio = $('#fecha-inicio').val();
		var fechaFin = $('#fecha-fin').val();
		$.ajax({
			type:'POST',
			url:baseUrl + '/admin-registrados-rango',
			data:'fechaInicio='+fechaInicio+'&fechaFin='+fechaFin,
			success:function(data) {
				var url = baseUrl + '/admin-reporte-rango';
				url += '/' + fechaInicio + '/' + fechaFin;
				$('#reporte-rango').attr('href', url);

				$('#datos-rango .registros').html(data);
				$('#datos-rango').fadeIn();
				return false;
			},
			dataType:'text'
		});
	});
});