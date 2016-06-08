@extends('layouts.master')

@section('navbar')
@parent

@stop

@section('content')

<h1>Showing{{$band->name}}</h1>

	<div class="jumbotron text-cnter">
		<h2>{{$band->nama}}</h2>
		<p>
		<strong>Email:</strong>{{$band->email}}<br>
		<strong>Level:</strong>{{$band->aliran}}
		</p>
	</div>
	
@stop