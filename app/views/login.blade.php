@extends('layouts.master')
@section('content')
<div class="container" >
<div class="col-md-5 col-md-offset-3">
<br><br><br>
<div><center>
<img class="img-responsive" src="{{asset('/assets//css/img/unand.png')}}" alt="" style="height:200px" "width:50px">
      <div class="intro-text">
      	<div style="color:green">
                        <h1>Portal Akademik</h1>
                        
                        <span class="skills">Universitas Andalas</span></div>
                    </div></center></div>
<hr/>

@if(Session::has('pesan_error'))
<div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>
@endif



{{Form::open(array('action' => 'UserController@authenticate')) }}

	{{Form::label('bpnip', 'BP/NIP') }}
	{{Form::text('bpnip', '', array('class' => 'form-control'))}}
	{{Form::label('password', 'Password') }}
	{{Form::password('password', array('class' => 'form-control'))}}
	<br>
	<center>{{Form::submit('Login', array('class' => 'btn btn-success')) }}</center>
{{Form::close() }}
</div>
</div>

@stop