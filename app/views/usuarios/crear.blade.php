@extends('layout')

@section('contenido')
<div class="row marketing">
	<h3>Crear Usuario</h3>

	{{ Form::open(array('url' => 'usuario')) }}

		@if (Session::get('mensaje') )
        	<div class="alert alert-success">{{Session::get('mensaje')}}</div>
        @endif

		<div class="form-group">
			{{ Form::label('nombre','Nombre') }}
			{{ Form::text('nombre','') }}
		</div>

		<div class="form-group">
			{{ Form::label('apellido','Apellido') }}
			{{ Form::text('apellido','') }}
		</div>


		<div class="form-group">
			{{ Form::label('correo','Correo') }}
			{{ Form::text('correo','') }}
		</div>

		<div class="form-group">
			{{ Form::label('zona','Zona') }}
			{{ Form::text('zona','') }}
		</div>

		<div class="form-group">
			{{ Form::label('plan','Plan') }}
			<select class="form-control" name="plan_id">
				@foreach($planes as $plan)
					<option value="{{$plan->id}}"> {{ $plan->descripcion }} </option>
				@endforeach
			</select>
		</div>

		{{ Form::submit('Guardar',array('class'=>'btn btn-success'))}}
	{{ Form::close() }}
</div>


@stop

