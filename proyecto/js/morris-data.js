$(function () {

	Morris.Area({
		element: 'morris-area-chart',
		data: reporte,
		xkey: 'fecha',
		ykeys: ['cantidad'],
		labels: ['Registrados'],
		parseTime: false,
		pointSize: 2,
		hideHover: 'auto',
		resize: true
	});

});
