@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')

<div class="container">	

{!! Form::open(['route' =>'users.store','method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label('name','Nombre') !!}
	{!! Form::text('name','null',['class' => 'form-control','placeholder' => 'Nombre Completo','required']) !!}	
</div>

<div class="form-group">
	{!! Form::label('email','Correo Electronico') !!}
	{!! Form::email('email','null',['class' => 'form-control','placeholder' => 'example@email','required']) !!}	
</div>

<div class="form-group">
	{!! Form::label('password','Contraseña') !!}
	{!! Form::password('password',['class' => 'form-control','placeholder' => '************','required']) !!}	
</div>

<div class="form-group">
	{!! Form::label('type','Tipo') !!}
	{!! Form::select('type',['member' => 'Miembro','admin' => 'administrador'], null, ['class' => 'form-control','placeholder' => 'seleccione una opcion ...','required']) !!}	
</div>

<div class="form-group">
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>



{!! Form::close() !!} 

@endsection

</div>