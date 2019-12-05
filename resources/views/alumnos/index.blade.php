@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<a href="{{route('alumnos.create')}}">Crear alumno</a>
	</div>
</div>


<div class="table-responsive">
	
	<table class="table table-striped table-bordered">
	<thead>
		<th>Nro</th>
		<th>DNI</th>
		<th>Nombre</th>
		<th>Correo</th>
		<th>acciones</th>
	</thead>
	<tbody>
		@foreach($alumnos as $alumno)
		<tr>
			<td>{{ $loop->iteration}}</td>
			<td>{{$alumno->dni}}</td>
			<td>{{$alumno->nombres}}</td>
			<td>{{$alumno->correo}}</td>
			<td>
				<a href="{{route('alumnos.edit',$alumno->id)}}">Editar</a>
			</td>

			<td>
				<form action="{{route('alumnos.destroy',$alumno->id)}}" method="POST">
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