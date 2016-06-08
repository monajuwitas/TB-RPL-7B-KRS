@extends('layouts.master')

@section('content')
<div class="container">
<div class="col-md-5 col-md-offset-3">
<h2>Login</h2>
<hr />

 @if(Session::has('pesan_error'))
   <div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>
 @endif

{{Form::open(array('action' => 'UserController@authenticate')) }}
{{Form::label('email', 'Email') }}
{{Form::text('email', '', array('class' => 'form-control'))}}
{{Form::label('password', 'Password') }}
{{Form::password('password', array('class' => 'form-control'))}}
{{Form::submit('Login', array('class' => 'btn btn-primary')) }}
{{Form::close() }}

</div>
</div>
@stop