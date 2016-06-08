<!DOCTYPE html>
<html>
<head>
<title>Portal Sistem Informasi</title>
<link rel="stylesheet"
href="{{asset('/assets//css2/bootstrap.min.css')}}">
    <link href="{{asset('/assets//css/bootstrap.min.css')}} " rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/assets//css/freelancer.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/assets//css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets//css/new2.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets//css/new3.css')}}" rel="stylesheet" type="text/css">
    <style type="text/css">
      .pesan-container{
        max-height: 400px;
        overflow: scroll;
        display: block;
      }
    </style>
</head>
<body>
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{URL::to('home')}}">Beranda</a></li>
      <li><a href="{{URL::to('profildosen')}}">Profil</a></li>
      <li><a href="{{URL::to('mhs')}}">Mahasiswa</a></li>
      <li><a href="{{URL::to('krshome')}}">KRS</a></li>
      <li><a href="{{URL::to('bomhs')}}">Bimbingan</a></li>
      <li><a href="{{URL::to('logout')}}">Logout</a></li>
    </ul>
  </div>
<div class="container">
@section('navbar')
@show
@yield('content')

</div>
<br><br><br><br><br><br>
   <footer class="text-center">
       
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; RPL Kelompok 7
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>