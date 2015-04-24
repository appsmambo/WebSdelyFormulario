$(document).ready(function () {
	$('#departamento').change(function () {
		var id;
		id = $(this).val();
		$.ajax({
			url: urlBase + '/getProvincias',
			data: 'id=' + id,
			error: function () {
				console.log('error');
			},
			dataType: 'json',
			success: function (data) {
				var html;
				html = '<option>PROVINCIA</option>';
				$.each(data, function (i, item) {
					html += '<option value="' + item.id + '">' + item.provincia + '</option>';
				});
				$('#provincia').val('').trigger('change').html(html);
				$('#distrito').val('').trigger('change');
			},
			type: 'POST'
		});
	});
	$('#provincia').change(function () {
		var id;
		id = $(this).val();
		$.ajax({
			url: urlBase + '/getDistritos',
			data: 'id=' + id,
			error: function () {
				console.log('error');
			},
			dataType: 'json',
			success: function (data) {
				var html;
				html = '<option>DISTRITO</option>';
				$.each(data, function (i, item) {
					html += '<option value="' + item.id + '">' + item.distrito + '</option>';
				});
				$('#distrito').val('').trigger('change').html(html);
			},
			type: 'POST'
		});
	});
	$('#distrito').change(function () {
		$('#dpto').val($('#departamento option:selected').text());
		$('#prov').val($('#provincia option:selected').text());
		$('#dist').val($('#distrito option:selected').text());
	});
});