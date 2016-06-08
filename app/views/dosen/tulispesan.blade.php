@extends('layouts.master3')
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/bimbingan.png')}}" alt="" style="height:150px" "width:100px"></div>
	    <div class="col-sm-8" style=""><h1>Bimbingan Online</h1></div>
	    <div class="col-md-2" style=""></div>
	</div >
	<div clas="row">
		<div class="col-sm-2"></div>
	</div>
	<div class="row pesan-container">

	@foreach($pesan as $key)
	@if ($key->from=="1")
		<?php
		$aktor = "Me";
		$classx ="pull-right";
		?>
	@else
	<?php
		$aktor = $bo->nama;
		$classx = "pull-left";
		?>
	@endif
	<div class="row">
		<div class="col-md-6 {{$classx}}">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{$aktor}}</h3>
		  </div>
		  <div class="panel-body">
		    {{$key['isi']}}
		  </div>
		</div>
		</div>
	</div>
	@endforeach
	</div>
	<div class="row">
		<!--input pesan-->
		@if (Session::has('pesan'))
    		<div class="alert alert-info">{{ Session::get('pesan') }}</div>
		@endif
		{{HTML::ul($errors->all())}}
		{{Form::open(['url' => 'pesanbo/'.$bo->id]) }}
		{{Form::label('isi', 'Pesan') }}
		{{Form::textarea('isi', '', array('class' => 'form-control'))}}<br>
		<center>{{Form::submit('Kirim', array('class' => 'btn btn-success')) }}</center>
		{{Form::close() }}
	</div>
</div>
@stop