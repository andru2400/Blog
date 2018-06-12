@extends('admin.template.main')

@section('title','Crear Tag')

@section('content')

<div class="container">	

{!! Form::open(['route' => 'tags.store','method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label('name','Nombre del Tag') !!}
	{!! Form::text('name','null',['class' => 'form-control','placeholder' => 'Nombre de Tag','required']) !!}	
</div>

<div class="form-group">
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!} 

@endsection

</div>