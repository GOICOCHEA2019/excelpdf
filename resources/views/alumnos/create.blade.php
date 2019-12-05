@extends('layouts.app')
@section('content')

	<form action="{{route('alumnos.store')}}" method="post" accept-charset="utf-8">

		<div class="form-group">
			<label for = "nombre">DNI</label>
			<input class="form-control" type="text" name="dni" value="{{old ('dni')}}" placeholder="DNI" id="dni">
			<span class="text-danger">{{$errors->first('dni')}}</span>
		</div>

		<div class="form-group">
			<label for = "nombre">Nombre</label>
			<input class="form-control" type="text" name="nombres" value="{{old ('nombre')}}" placeholder="nombre" id="nombre">
			<span class="text-danger">{{$errors->first('nombres')}}</span>
		</div>
		
			<div class="form-group">
			<label for = "nombre">correo</label>
			<input class="form-control" type="text" name="correo" value="{{old ('correo')}}" placeholder="correo" id="correo">
			<span class="text-danger">{{$errors->first('correo')}}</span>
				
			</div>

			@csrf

			<div class="form-group">
				<button type = "submit">Guardar</button>
			</div>
			
		

	</form>

@endsection