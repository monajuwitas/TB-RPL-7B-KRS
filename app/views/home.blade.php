
@extends('layouts.master2')
@section('content')

<div class="row" id="logo_menu">
           <div class="col-md-3 jarak_bawah" style="text-align:center">
              <center><img class="img-responsive img-circle margin" src="{{asset('/assets//css/img/profile1.png')}}" alt="" style="height:200px" "width:200px"></center>
           </div>
           <div class="col-md-8 jarak_bawah">
              <h1>Mona Juwita S</h1>
              <span class="skills">Selamat Datang di Portal Akademik Universitas Andalas<br>
              Portal ini memungkinkan Civitas Akademika Universitas Andalas menerima informasi yang lebih jelas. <br>
              Silahkan menggunakan fasilitas ini</span>
           </div>
</div>

<div class="row">
        <div class="row" id="logo_menu">
           <div class="col-md-3 jarak_bawah" style="text-align:center"></div>
           <div class="col-md-2 jarak_bawah" style="text-align:center">
              <a class="logo logo_event" href="http://hmsi.si.fti.unand.ac.id/berita/" target="_blank"><img src="{{asset('/assets//css/img/profil.png')}}" alt="" style="height:150px" "width:200px"></a>
              <h4 class="wow animated fadeInDown h2color" data-wow-delay="0.5s">Profil</h4>
           </div>
           <div class="col-md-2 jarak_bawah" style="text-align:center">
             <a class="logo logo_event" href="http://hmsi.si.fti.unand.ac.id/berita/" target="_blank" ><img src="{{asset('/assets//css/img/mahasiswa.png')}}" alt="" style="height:150px" "width:200px"></a>
             <h4 class="wow animated fadeInDown h2color" data-wow-delay="0.5s">Mahasiswa</h4>
           
           </div>
           <div class="col-md-2 jarak_bawah" style="text-align:center">
             <a class="logo logo_event" href="http://hmsi.si.fti.unand.ac.id/berita/" target="_blank"><img src="{{asset('/assets//css/img/krs.png')}}" alt="" style="height:150px" "width:200px"></a>
             <h4 class="wow animated fadeInDown h2color" data-wow-delay="0.5s">KRS</h4>
           </div>
           <div class="col-md-2 jarak_bawah" style="text-align:center">
             <a class="logo logo_event" href="http://hmsi.si.fti.unand.ac.id/berita/" target="_blank"><img src="{{asset('/assets//css/img/bimbingan.png')}}" alt="" style="height:150px" "width:200px"></a>
             <h4 class="wow animated fadeInDown h2color" data-wow-delay="0.5s">Bimbingan Online</h4>
           </div>
          <!--di tag I ubah-->
        </div>        
</div>
<div class="col-md-4 jarak_bawah" style="text-align:center">
    <h2 class="wow animated fadeInDown h2color" data-wow-delay="0.5s">Informasi Umum</h2>
 </div>
@stop