$(document).ready(function() {
	$('#bancos option').click(function() {
		var valor = getElementsByTagName('#bancos option').value;
		getElementById('cuentas').style.display('show');
	})
});