@extends('layouts.app')
@section('content')

	<form action="{{route('alumnos.update',$alumno->id)}}" method="post" accept-charset="utf-8">

		<div class="form-group">
			<label for = "nombre">DNI</label>
			<input class="form-control" type="text" name="dni" value="{{$alumno->dni}}" placeholder="DNI" id="dni">
			<span class="text-danger">{{$errors->first('dni')}}</span>
		</div>

		<div class="form-group">
			<label for = "nombre">Nombre</label>
			<input class="form-control" type="text" name="nombres" value="{{$alumno->nombres}}" placeholder="nombre" id="nombre">
			<span class="text-danger">{{$errors->first('nombres')}}</span>
		</div>
		
			<div class="form-group">
			<label for = "nombre">correo</label>
			<input class="form-control" type="text" name="correo" value="{{$alumno->correo}}" placeholder="correo" id="correo">
			<span class="text-danger">{{$errors->first('correo')}}</span>
				
			</div>

			@csrf

			{!! method_field('PUT')!!}

			<div class="form-group">
				<button type = "submit">Guardar</button>
			</div>
			
		

	</form>

@endsection