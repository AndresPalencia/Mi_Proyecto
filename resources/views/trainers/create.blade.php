@extends('layouts.app')

@section('tittle', 'Trainers')

@section('content')
<br>
	<form class="form-group" method="POST" action="/trainers">
		@csrf
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>
<br>
	<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection
