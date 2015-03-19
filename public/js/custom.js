$(document).ready(function() { 	
	$('.jumbotron').hide();
	$('.jumbotron').fadeIn(2500);
});

$(document).ready(function() {
	$('#cuentas').hide();

	$('#bancos').change(function() {
		var id = $('#bancos option:selected').attr('value');
		console.log(id);
		
		$.ajax({
			url: '../banco',
			type: 'GET',
			dataType: 'json',
			data: {'bancoid': id},
			success:function(response)
			{	
				console.log(response['cuentas']);
				$('#cuentas').slideUp('slow', function() { 
					$('#cuentas ul').empty();
					for (var cuenta in response['cuentas'])
					{
						$('#cuentas ul').append('<li class="list-group-item">'+ response['cuentas'][cuenta].numero +'</li>');
						$('#cuentas ul').append('<li class="list-group-item">'+ response['cuentas'][cuenta].tipo +'</li>');
					}
					$('#cuentas').slideDown('slow'); 
				});
			}
		});
	})
});