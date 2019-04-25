@extends('layouts.app')

@section('tittle', 'Trainers Create')

@section('content')
<br>
	<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
		@csrf
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
@endsection
