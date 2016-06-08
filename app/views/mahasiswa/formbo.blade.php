
@extends('layouts.master2')
@section('content')

<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/bimbingan.png')}}" alt="" style="height:150px" "width:100px"></div>
    <div class="col-sm-8" style=""><h1>Bimbingan Online</h1></div>
    <div class="col-md-2" style=""></div>
  </div>
  <div class="row">
    <div class="col-sm-2" style=""></div>
    <div class="col-sm-8" style="">
    <h4> NIM  : {{$mahasiswa-> bp}} </h4>
    <h4> Nama : {{$mahasiswa-> nama}} </h4>
    {{HTML::ul($errors->all())}}
    {{Form::open(array('action' => 'boController@store')) }}
    <h3><u> KETERANGAN </u> </h3>
    <br>
    {{Form::label('ipk', 'IPK') }}
    {{Form::text('ipk', '', array('class' => 'form-control'))}}
    {{Form::label('ips', 'IPS') }}
    {{Form::text('ips', '', array('class' => 'form-control'))}}
    {{Form::label('matkulnilaiCkur', 'NIlai_C-') }}
    {{Form::text('matkulnilaiCkur', '', array('class' => 'form-control'))}}
    {{Form::label('matkulnilaiD', 'NIlai_D') }}
    {{Form::text('matkulnilaiD', '', array('class' => 'form-control'))}}
    {{Form::label('matkulnilaiE', 'NIlai_E') }}
    {{Form::text('matkulnilaiE', '', array('class' => 'form-control'))}}
   
    <br>{{ Form::label('nip', 'Dosen PA') }}
    <br>{{ Form::select('nip',array('198201182008121002' => 'Surya Afnarius', '198301182008121001' => 'Dawirson', '198301182008121003' => 'Husnil Kamil', '198301182008121004' => 'Hasdi Putra', '198301182008121005' => 'Ricki Akbar','198003102012121003' => 'Haris Suryamen', '197901182008121001' => 'fajril Akbar','198101182008122001' => 'Meiza Silvana'))  }} <br> <br>
    {{Form::label('pesan', 'Deskripsi Rencana Perbaikan') }}
    {{Form::textarea('pesan', '', array('class' => 'form-control'))}}
    <br>
    <center>{{Form::submit('Kirim', array('class' => 'btn btn-success')) }}</center>
    {{Form::close() }}
    </div>
    <div class="col-md-2" style=""></div>
  </div>
  
</div>

@stop