@extends('layouts.app')

@section('tittle', 'Trainers Show')

@section('content')
	@if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
  <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
  	<div class="text-center">
    	<h5 class="card-title">{{$trainer->name}}</h5>
  		<a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
  		<br>
  		{!! Form::open([ 'route' => ['trainers.destroy', $trainer->slug], 'method' => 'DELETE' ]) !!}
  			{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
  		{!! Form::close() !!}
  	</div>
@endsection
