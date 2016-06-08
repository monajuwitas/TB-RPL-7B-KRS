@extends('layouts.master2')
@section('content')

<div class="container-fluid">
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
  <div class="row">
    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/bimbingan.png')}}" alt="" style="height:150px" "width:100px"></div>
    <div class="col-sm-8" style=""><h1>Bimbingan Online</h1></div>
  </div>
</div>

  
<center>
 <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4" style=""><a href="{{URL::to('formbo')}}"><button type="button"  class="btn btn-primary btn-lg btn-block">Form Bimbingan Online</button></a></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-4" style=""><a href="{{URL::to('listpesanbomhs')}}"><button type="button" class="btn btn-primary btn-lg btn-block">Pesan Bimbingan</button></a></div>
</div></center>

@stop