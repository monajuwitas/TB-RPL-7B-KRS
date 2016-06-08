@extends('layouts.master')

@section('navbar')
@parent

@stop
@section('content')
<h1>Create Band</h1>

<!-notifikasi error-->
{{HTML::ul($errors->all())}}

{{Form::open(array('url'=>'bands'))}}

	<div class="form-group">
	{{Form::label('nama','Nama')}}
	{{Form::text('nama',Input::old('nama'),array('class'=>'form-control'))}}
	</div>
	
	<div class="form-group">
	{{Form::label('email','Email')}}
	{{Form::text('email',Input::old('email'),array('class'=>'form-control'))}}
	</div>
	
	<div class="form-group">	
	{{Form::label('aliran','Aliran')}}
	{{Form::text('aliran',Input::old('aliran'),array('class'=>'form-control'))}}
	</div>
	
	{{Form::submit('Create the Band!',array('class'=>'btn btn-primary'))}}
	
	{{Form::close()}}
	@stop