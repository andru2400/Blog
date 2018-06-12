@extends('admin.template.main')
@section('title','Lista de Tags')
@section('content')
<div class="container">

<a href="{{ route('tags.create') }}" class="btn btn-primary" style="margin: 0px 0px 10px 0px;">Registrar Nuevo Tag</a>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>NOMBRE</th>			
			<th>ACCION</th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
			  <tr>	
				<td>{{ $tag->id }}</td>
				<td>{{ $tag->name }}</td>				
				<td>
				<a href="{{ route('tags.edit', $tag->id)}} " class="btn btn-warning">edit</a><a href=" {{ route('admin.tags.destroy', $tag->id) }} " class="btn btn-danger" onclick="return confirm('¿Seguro?')"><span class="">x</span></a>
				</td>
			  </tr>
			@endforeach
		</tbody>
	</table>

<div style="margin-left: 40%;">{!! $tags->render() !!}</div> 

@endsection
</div>