<!DOCTYPE HTML>
<html>
	<head>
		<title>Crear Usuario</title>
		{{HTML::style("css/bootstrap.min.css")}}
    	{{HTML::style("css/jumbotron-narrow.css")}}
	</head>

	<body>
		<div class="container">
			
			<div clas="header">
				<ul class="nav nav-pills pull-right">
					<li>{{ HTML::link('/','Inicio') }}</li>
					<li>{{ HTML::link('usuario','Crear Usuario') }}</li>
					<li>{{ HTML::link('','Mostrar Usuarios') }}</li>
				</ul>
				<h3 class="text-muted">Cosa</h3>
			</div>

			@yield('contenido')

			<div class="footer">
				<h3 class="text-muted text-right">Cosa</h3>
			<div>

		</div>
	</body>
</html>