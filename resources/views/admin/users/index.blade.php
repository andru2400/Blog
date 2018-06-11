@extends('admin.template.main')
@section('title','lista de usuarios')
@section('content')
<div class="container">

<a href="{{ route('users.create') }}" class="btn btn-primary" style="margin: 0px 0px 10px 0px;">Registrar nuevo usuario</a>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>CORREO</th>
			<th>TIPO</th>
			<th>ACCION</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			  <tr>	
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					@if($user->type == "admin")
						<span class="badge badge-primary">
							{{ $user->type }}</span>
					@else
					    <span class="badge badge-secondary">
							{{ $user->type }}</span>					
					@endif		
				</td>
				<td>
				<a href="{{ route('admin.users.edit', $user->id)}} " class="btn btn-warning">edit</a><a href=" {{ route('admin.users.destroy', $user->id) }} " class="btn btn-danger" onclick="return confirm('¿Seguro?')"><span class="">x</span></a>
				</td>
			  </tr>
			@endforeach
		</tbody>
	</table>

<div style="margin-left: 40%;">{!! $users->render() !!}</div> 

@endsection
</div>