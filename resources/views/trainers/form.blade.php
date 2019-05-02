<br>
	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('slug', 'Alias') !!}
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