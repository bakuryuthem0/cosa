$(document).ready(function() { 	
	$('.jumbotron').hide();
	$('.jumbotron').fadeIn(2500);
	$('#cuentas').hide();

	$.ajax({
		url: 'banco',
		type: 'GET',
		dataType: 'json',
		data: {id: 'id'},
		succes:function(response)
		{
			$('#bancos option').click(function() {

				$('#cuentas').slideDown('slow');
				console.log(id);
			});
		}
	});
});