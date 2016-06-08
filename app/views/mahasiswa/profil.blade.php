
@extends('layouts.master2')
@section('content')
<!-- <div class="col-md-2 jarak_bawah" style="text-align:center">
  <a class="logo logo_event" href="#" target="_blank"><img src="{{asset('/assets//css/img/profil.png')}}" alt="" style="height:150px" "width:100px"></a>
  
</div>
<div class="col-md-1 jarak_bawah" style="text-align:center">
  <h1>Profil Mahasiswa</h1>  
</div>
<div class="col-md-9 jarak_bawah" style="text-align:center">
  
</div> -->


<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/profil.png')}}" alt="" style="height:150px" "width:100px"></div>
    <div class="col-sm-8" style=""><h1>Profil Mahasiswa</h1>
    <h4>Nomor Induk : {{$mahasiswa-> bp}}</h4>
    <h4>Nama : {{$mahasiswa-> nama}}</h4>
    <h4>Alamat : {{$mahasiswa-> alamat}}</h4>
    <h4>Tempat Tanggal Lahir : {{$mahasiswa-> ttl}}</h4>
    <h4>Agama : {{$mahasiswa-> agama}}</h4>
    <h4>Jenis Kelamin : {{$mahasiswa-> jenis_kelamin}}</h4>
    <h4>Asal SMA : {{$mahasiswa-> asal_slta}}</h4>
    <h4>Nama Orang Tua : {{$mahasiswa-> nama_ortu}}</h4>
    <h4>Alamat Orang Tua : {{$mahasiswa-> alamat_ortu}}</h4>
    <h4>Warga Negara : {{$mahasiswa-> warga_negara}}</h4>
    <h4>Status : {{$mahasiswa-> status}}</h4>
    <h4>Level UKT : {{$mahasiswa-> lvl_jurusan}}</h4>
    <h4>Besar Uang Kuliah : {{$mahasiswa-> uang_kuliah}}</h4></div>
    <div class="col-md-2 see_more" style=""><img src="{{asset('/assets//css/img/fotomahasiswa.png')}}" alt="" style="height:auto;width:250px"></div>
  </div>
  
</div>

@stop