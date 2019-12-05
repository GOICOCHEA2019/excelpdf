@extends('layouts.app')
@section('content')

	<form action="{{route('usuarios.store')}}" method="post" accept-charset="utf-8">


		<div class="form-group">
			<label for = "nombre">Nombre</label>
			<input class="form-control" type="text" name="name" value="{{old ('nombre')}}" placeholder="nombre" id="nombre">
			<span class="text-danger">{{$errors->first('name')}}</span>
		</div>
		
			<div class="form-group">
			<label for = "nombre">correo</label>
			<input class="form-control" type="text" name="email" value="{{old ('email')}}" placeholder="email" id="email">
			<span class="text-danger">{{$errors->first('email')}}</span>
			</div>

			<div class="form-group">
			<label for = "password">clave</label>
			<input class="form-control" type="text" name="password" value="{{old ('password')}}" placeholder="clave" id="password">
			<span class="text-danger">{{$errors->first('password')}}</span>	
			</div>

			<div class="form-group">
			<label for = "password">Confirmar clave</label>
			<input class="form-control" type="text" name="password_confirmation" value="{{old ('password')}}" placeholder="password" id="password_confirmation">
			<span class="text-danger">{{$errors->first('password')}}</span>
			</div>

			@csrf

			<div class="form-group">
				<button type = "submit">Guardar</button>
			</div>
			
		

	</form>

@endsection