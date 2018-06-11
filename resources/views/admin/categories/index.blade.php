@extends('admin.template.main')
@section('title','Lista de Categorias')
@section('content')
<div class="container">

<a href="{{ route('categories.create') }}" class="btn btn-primary" style="margin: 0px 0px 10px 0px;">Registrar Nueva Categoria</a>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>NOMBRE</th>			
			<th>ACCION</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
			  <tr>	
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>				
				<td>
				<a href="{{ route('categories.edit', $category->id)}} " class="btn btn-warning">edit</a><a href=" {{ route('admin.categories.destroy', $category->id) }} " class="btn btn-danger" onclick="return confirm('¿Seguro?')"><span class="">x</span></a>
				</td>
			  </tr>
			@endforeach
		</tbody>
	</table>

<div style="margin-left: 40%;">{!! $categories->render() !!}</div> 

@endsection
</div>