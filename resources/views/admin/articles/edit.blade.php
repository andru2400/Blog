@extends('admin.template.main')

@section('title','Editar Articulo'.$article->title)

@section('content')

<div class="container">	

{!! Form::open(['route' =>['articles.update',$articles->id],'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('title','Titulo') !!}
	{!! Form::text('title',$article->title,['class' => 'form-control','placeholder' => 'Titulo completo','required']) !!}	
</div>

<div class="form-group">
	{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
</div>



{!! Form::close() !!} 

@endsection

</div>