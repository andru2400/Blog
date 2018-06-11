@extends('admin.template.main')

@section('title','Crear Categoria')

@section('content')

<div class="container">	

{!! Form::open(['route' => 'categories.store','method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label('name','Nombre') !!}
	{!! Form::text('name','null',['class' => 'form-control','placeholder' => 'Nombre de Categoria','required']) !!}	
</div>

<div class="form-group">
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!} 

@endsection

</div>