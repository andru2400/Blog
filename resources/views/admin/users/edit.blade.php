@extends('admin.template.main')

@section('title','Editar Usuario'.$user->name)

@section('content')

<div class="container">	

{!! Form::open(['route' =>['users.update',$user->id],'method' => 'PUT']) !!}


<div class="form-group">
	{!! Form::label('name','Nombre') !!}
	{!! Form::text('name',$user->name,['class' => 'form-control','placeholder' => 'Nombre Completo','required']) !!}	
</div>

<div class="form-group">
	{!! Form::label('email','Correo Electronico') !!}
	{!! Form::email('email',$user->email,['class' => 'form-control','placeholder' => 'example@email','required']) !!}	
</div>

	

<div class="form-group">
	{!! Form::label('type','Tipo') !!}
	{!! Form::select('type',['member' => 'Miembro','admin' => 'administrador'], null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
	{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
</div>



{!! Form::close() !!} 

@endsection

</div>