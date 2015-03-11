@extends('layout')

@section('contenido')

<div class="row marketing">
	<h3>{{ $datos->nombre.' '.$datos->apellido }}</h3>
	<div class="panel panel-primary col-xs-7" style="font-size:18px">{{ $plan->descripcion }}</div> 
	<div class="panel panel-primary col-xs-5" style="font-size:18px">{{ $plan->precio }}Bs</div>

	{{ Form::open(array('url' => 'banco')) }}
		<div class="form-group">
			<p>Seleccione el banco en el que quiere realizar su pago</p>
			<select class="form-control" name="banco_id">
				@foreach($bancos as $banco)
					<option value="{{$banco->id}}"> {{ $banco->descripcion }} </option>
				@endforeach
			</select>
		</div>
	{{ Form::close() }}
</div>

@stop