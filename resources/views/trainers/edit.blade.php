@extends('layouts.app')

@section('tittle', 'Trainers Create')

@section('content')

<br>
{!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true ]) !!}

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
	{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}	
{!! Form::close() !!}

@endsection


<!-- @ extends('layouts.app')

@ section('tittle', 'Trainers Edit')

@ section('content')
<br>
	<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
		@ method('PUT')
		@ csrf
	<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
	<br><div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" value="{{$trainer->name}}" class="form-control">
		</div>
	<br><div class="form-group">
			<label for="">Avatar</label>
			<input type="file" name="avatar" value="{{$trainer->avatar}}">
		</div>
	<br><div class="form-group">
			<label for="">Descripcion</label>
			<input type="text" name="description" value="{{$trainer->description}}" class="form-control">
		</div>
<br>
	<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
@ endsection -->
