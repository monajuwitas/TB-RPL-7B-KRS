@extends('layouts.master')

@section('navbar')
@parent

@stop

@section('content')

<h1>Edit{{$band->name}}</h1>

<!--notifikasi error-->
{{HTML::ul($errors->all())}}

{{Form::model($band,array('route'=>array('bands.update',$band->id)'method'=>'PUT'))}}

	<div class="form-group">
	{{Form::label('nama','Nama')}}
	{{Form::text('nama',null,array('class'=>'form-control'))}}
	</div>
	
	<div class="form-group">
	{{Form::label('email','Email')}}
	{{Form::text('email',null,array('class'=>'form-control'))}}
	</div>
	
	<div class="form-group">
	{{Form::label('aliran','Aliran')}}
	{{Form::text('aliran',array('0'=>'Aliran Musik','1'=>'Heavy Metal','2'=>'Hard Rock','3'=>'Progressive Rock'))}}
	</div>
	
	{{Form::submit('Edit the Band!',array('class'=>'btn btn-primary'))}}
	{{Form::close()}}

@stop	