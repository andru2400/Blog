@extends('admin.template.main')
@section('title','Lista de Articulos')
@section('content')
<div class="container">
<!--Buscador de Articulos-->
{!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
	    </div>
		{!! Form::text('title', null, ['class' => 'form-control col-md-4', 'placeholder' => 'Buscar Articulo ...']) !!}
	{!! Form::close() !!}
</div>
<!--fin Buscador de Articulos-->

<a href="{{ route('articles.create') }}" class="btn btn-primary" style="margin: 0px 0px 10px 0px;">Registrar Nuevo Articulo</a>

	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Titulo</th>			
			<th>Contenido</th>
			<th>Usuario</th>
			<th>categoria</th>
			<th>slug</th>

			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			  <tr>	
				<td>{{ $article->id }}</td>
				<td>{{ $article->title }}</td>
				<td>{{ $article->content }}</td>
				<td>{{ $article->user->name }}</td>
				<td>{{ $article->category->name }}</td>
				<td>{{ $article->slug }}</td>


				<td>
				<a href="{{ route('articles.edit', $article->id)}} " class="btn btn-warning">edit</a><a href=" {{ route('admin.articles.destroy', $article->id) }} " class="btn btn-danger" onclick="return confirm('¿Seguro?')"><span class="">x</span></a>
				</td>
			  </tr>
			@endforeach
		</tbody>
	</table>

<div style="margin-left: 40%;">{!! $articles->render() !!}</div> 

@endsection
</div>