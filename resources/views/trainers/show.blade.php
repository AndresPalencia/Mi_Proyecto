@extends('layouts.app')

@section('tittle', 'Trainers')

@section('content')
  <br><img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
  <div class="text-center">
    <h5 class="card-title">{{$trainer->name}}</h5>
  	<a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
  </div>
@endsection
