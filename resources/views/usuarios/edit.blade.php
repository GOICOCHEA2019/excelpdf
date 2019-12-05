@extends('layouts.app')
@section('content')

	<form action="{{route('usuarios.update', $usuario->id)}}" method="post" accept-charset="utf-8">


		<div class="form-group">
			<label for = "nombre">Nombre</label>
			<input class="form-control" type="text" name="name" value="{{$usuario->name}}" placeholder="nombre" id="nombre">
			<span class="text-danger">{{$errors->first('email')}}</span>
		</div>
					<div class="form-group">
			<label for = "nombre">correo</label>
			<input class="form-control" type="text" name="email" value="{{$usuario->email}}" placeholder="email" id="email">
			<span class="text-danger">{{$errors->first('email')}}</span>
			</div>

			<div class="form-group">
			<label for = "password_actual">clave actual</label>
			<input class="form-control" type="text" name="password_actual" value="" placeholder="clave" id="password_actual">
			<span class="text-danger">{{$errors->first('password_actual')}}</span>	
			</div>

			<div class="form-group">
			<label for = "password">clave</label>
			<input class="form-control" type="text" name="password" value="" placeholder="clave" id="password">
			<span class="text-danger">{{$errors->first('password')}}</span>	
			</div>

			<div class="form-group">
			<label for = "password">Confirmar clave</label>
			<input class="form-control" type="text" name="password_confirmation" value="" placeholder="password" id="password_confirmation">
			<span class="text-danger">{{$errors->first('password')}}</span>
			</div>

			@csrf

			{!! method_field('PUT') !!}

			<div class="form-group">
				<button type = "submit">Guardar</button>
			</div>
			
		

	</form>

@endsection