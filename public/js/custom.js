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
				$('#cuentas').slideUp('slow', function() { 
				
				for (cuenta in cuentas)
				{
					$('#cuentas ul').append('<li class="list-group-item">'+ cuenta['id'] +'</li>');
				}
					$('#cuentas').slideDown('slow'); });
			}
		});
	})


});