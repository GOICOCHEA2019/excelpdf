@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<a href="{{route('usuarios.create')}}">Crear usuario</a>
	</div>
</div>


<div class="table-responsive">
	
	<table class="table table-striped table-bordered">
	<thead>
		<th>Nro</th>
		<th>Nombre</th>
		<th>Correo</th>
		<th colspan="2">acciones</th>
	</thead>
	<tbody>
		@foreach($usuarios as $usuario)
		<tr>
			<td>{{ $loop->iteration}}</td>
			<td>{{$usuario->name}}</td>
			<td>{{$usuario->email}}</td>
			
			<td>
				<a href="{{route('usuarios.edit',$usuario->id)}}">Editar</a>
			</td>

			<td>
				<form action="{{route('usuarios.destroy',$usuario->id)}}" method="POST">
					{!!method_field('DELETE')!!}

						@csrf

					<button class="btn btn-danger" type="submit">eliminar</button>
					
				</form>
				
			</td>


		
			@endforeach
		</tr>
	</tbody>
</table>

</div>
@endsection