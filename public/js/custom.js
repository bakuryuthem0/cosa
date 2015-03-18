$(document).ready(function() { 	
	$('.jumbotron').hide();
	$('.jumbotron').fadeIn(2500);
	$('#cuentas').hide();
	var id;

	$('#bancos option').click(function() {
		id = $(this).attr('value');
		console.log(id);
	})

	$.ajax({
		url: 'banco',
		type: 'GET',
		dataType: 'json',
		data: {bancoid: id},
		succes:function(response)
		{
			$('#cuentas').slideUp('slow', function() { $('#cuentas').slideDown('slow'); });
			console.log(3);
		}
	});
});