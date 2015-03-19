$(document).ready(function() { 	
	$('.jumbotron').hide();
	$('.jumbotron').fadeIn(2500);
	$('#cuentas').hide();

});
jQuery(document).ready(function($) {
		$('#bancos').change(function() {
			var id = $(this).val();
			$.ajax({
				url: '../banco',
				type: 'GET',
				data: {'bancoid': id},
				succes:function(response)
				{
					console.log(response)
					
				}
			});
			
		})

	
});