@extends('layouts.app')

@section('tittle', 'Trainers Create')

@section('content')

<br>
{!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true ]) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('slug', 'Slug') !!}
		{!! Form::text('slug', null, ['class' => 'form-control']) !!}
	</div>
<br>
	<div class="form-group">
		{!! Form::label('avatar', 'Avatar') !!}
		{!! Form::file('avatar') !!}
	</div>
<br>
	<div class="form-group">
		{!! Form::label('description', 'Descripcion') !!}
		{!! Form::text('description', null, ['class' => 'form-control']) !!}
	</div>
<br>
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}	
{!! Form::close() !!}

@endsection


<!-- @ extends('layouts.app')

@ section('tittle', 'Trainers Create')

@ section('content')
<br>
	<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
		@ csrf
	<br><div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>
	<br><div class="form-group">
			<label for="">Avatar</label>
			<input type="file" name="avatar">
		</div>
	<br><div class="form-group">
			<label for="">Description</label>
			<input type="text" name="description" class="form-control">
		</div>
<br>
	<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@ endsection -->
