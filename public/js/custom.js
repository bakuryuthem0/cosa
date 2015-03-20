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
					$('#cuentas tbody').empty();
					for (var cuenta in response['cuentas'])
					{
						$('#cuentas tbody').append('<tr>');
						$('#cuentas tr:last').append('<td>'+ response['cuentas'][cuenta].numero +'</td>');
						$('#cuentas tr:last').append('<td>'+ response['cuentas'][cuenta].tipo +'</td>');
					}
					$('#cuentas').slideDown('slow'); 
				});
			}
		});
	})
});