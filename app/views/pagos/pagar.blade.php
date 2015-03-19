@extends('layout')

@section('contenido')

<div class="row marketing">
	<h3>{{ $datos->nombre.' '.$datos->apellido }}</h3>
	<div class="panel list-group-item col-xs-6" style="background-color:#E5E5E5">{{ $plan->descripcion }}</div> 
	<div class="panel list-group-item col-xs-1" style="background-color:#7ED3FF; text-align:center">                                           
		<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></div>
	<div class="panel list-group-item col-xs-5" style="background-color:#E5E5E5">{{ $plan->precio }}Bs</div>

	{{ Form::open(array('url' => 'banco')) }}
		<div class="form-group">
			<p>Seleccione el banco en el que quiere realizar su pago</p>
			<select id="bancos" class="form-control" name="banco_id">
				<option value="">Seleccione el banco</option>
				@foreach($bancos as $banco)
					<option value="{{$banco->id}}"> {{ $banco->descripcion }} </option>
				@endforeach
			</select>
		</div>
	{{ Form::close() }}
	
	<div id="cuentas" class="panel panel-primary">
		<ul class="list-group">
			@foreach($bancos as $banco)
				<li class="list-group-item"> {{ $banco->descripcion }} </li>
			@endforeach</div>
		</ul>
	</div>

@stop