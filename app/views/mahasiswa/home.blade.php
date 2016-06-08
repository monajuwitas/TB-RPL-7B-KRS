
@extends('layouts.master2')
@section('content')
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
  </div>

<div class="row" id="logo_menu">
           <div class="col-md-3 jarak_bawah" style="text-align:center">
              <center><img class="img-responsive img-circle margin" src="{{asset('/assets//css/img/profile1.png')}}" alt="" style="height:200px" "width:200px"></center>
           </div>
           <div class="col-md-8 jarak_bawah">
              <h1>{{$mahasiswa->nama}}</h1>
              <span class="skills">Selamat Datang di Portal Akademik Universitas Andalas<br>
              Portal ini memungkinkan Civitas Akademika Universitas Andalas menerima informasi yang lebih jelas. <br>
              Silahkan menggunakan fasilitas ini</span>
           </div>
</div>

<div class="row">
        <div class="row" id="logo_menu">
           <div class="col-md-3 jarak_bawah" style="text-align:center"></div>
           <div class="col-md-3 jarak_bawah" style="text-align:center">
              <a class="logo logo_event" href="{{URL::to('profil')}}" target="_blank"><img src="{{asset('/assets//css/img/profil.png')}}" alt="" style="height:200px" "width:200px"></a>
              <h4 class="wow animated fadeInDown h2color" data-wow-delay="0.5s">Profil</h4>
           </div>
           
           <div class="col-md-3 jarak_bawah" style="text-align:center">
             <a class="logo logo_event" href="{{URL::to('krs')}}" target="_blank"><img src="{{asset('/assets//css/img/krs.png')}}" alt="" style="height:200px" "width:200px"></a>
             <h4 class="wow animated fadeInDown h2color" data-wow-delay="0.5s">KRS</h4>
           </div>

           <div class="col-md-3 jarak_bawah" style="text-align:center">
             <a class="logo logo_event" href="{{URL::to('bo')}}" target="_blank"><img src="{{asset('/assets//css/img/bimbingan.png')}}" alt="" style="height:200px" "width:200px"></a>
             <h4 class="wow animated fadeInDown h2color" data-wow-delay="0.5s">Bimbingan Online</h4>
           </div>
          <!--di tag I ubah-->
        </div>        
</div>
<div class="col-md-4 jarak_bawah" style="text-align:center">
    <h2 class="wow animated fadeInDown h2color" data-wow-delay="0.5s">Informasi Umum</h2>
 </div>
@stop