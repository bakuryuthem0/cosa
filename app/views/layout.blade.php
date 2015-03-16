<!DOCTYPE HTML>
<html>
	<head>
		<title>Cosa</title>
		{{HTML::style('css/bootstrap.min.css')}}
    	{{HTML::style('css/jumbotron-narrow.css')}}
    	{{HTML::script('js/jquery-1.11.2.js')}}
    	{{HTML::script('js/bootstrap.min.js')}}
    	{{HTML::script('js/custom.js')}}
	</head>

	<body>
		<div class="container">
			
			<div clas="header">
				<ul class="nav nav-pills pull-right">
					<li>{{ HTML::link('/','Inicio') }}</li>
					<li>{{ HTML::link('usuario','Crear Usuario') }}</li>
					<li>{{ HTML::link('lista','Mostrar Usuarios') }}</li>
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