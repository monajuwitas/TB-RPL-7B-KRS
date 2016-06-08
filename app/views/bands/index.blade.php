@extends('layouts.master')

@section('navbar')
@parent

@stop
@section('content')
<h1>All the Bands</h1>

<!-notifikasi messages->
@if(Session::has('message'))
	<div class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nama</td>
				<td>Email</td>
				<td>Aliran</td>
				<td>Actions</td>
			</tr>
		</thead>
	<tbody>
	@foreach($bands as $key=>$value)
		<tr>
		<td>{{$value->id}}</td>
		<td>{{$value->nama}}</td>
		<td>{{$value->email}}</td>
		<td>{{$value->aliran}}</td>

		<td>{{Form::open(array('url'=>'bands/'.$value->id,'class'=>'pull-right'))}}
			{{Form::hidden('_method','DELETE')}}
			{{Form::submit('Delete',array('class'=>'btn btn-warning'))}}
			{{Form::close()}}
		<!--show band GET/bands/{id}-->
		<a class="btn btn-small btn-success"href="{{URL::to('bands/'.value->id)}}">Show</a>
		
		<!--edit band GET/bands/{id}/edit-->
		<a class="btn btn-small btn-info"href="{{URL::to('bands/'.$value->id.'/edit')}}">Edit</a>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
@stop