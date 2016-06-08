
@extends('layouts.master3')
@section('content')

<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/profil.png')}}" alt="" style="height:150px" "width:100px"></div>
    <div class="col-sm-8" style=""><h1>Profil Dosen</h1>
    <h4>NIP  : {{$dosen-> nip}}</h4>
    <h4>Nama :{{$dosen-> nama_dosen}}</h4>
    <h4>Alamat :{{$dosen-> alamat}}</h4>
    <h4>Tempat Tanggal Lahir :{{$dosen-> tanggal_lahir}}</h4>
    <h4>Agama : {{$dosen-> agama}}</h4>
    <h4>Jenis Kelamin : {{$dosen-> jenis_kelamin}}</h4>
    <h4>Email : {{$dosen-> email}}</h4>
    <h4>Nomor Telepon : {{$dosen-> no_telepon}}</h4>
    <h4>Tanggal Terdaftar : {{$dosen-> tanggal_terdaftar}}</h4>
    <h4>Warga Negara : {{$dosen-> warga_negara}}</h4>
    <h4>Status : {{$dosen-> status}}</h4>
  </div>  
    <div class="col-md-2 see_more" style=""><img src="{{asset('/assets//css/img/fotodosen.png')}}" alt="" style="height:auto;width:250px"></div>
  </div>

  
</div>

@stop