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
</head>
<body>
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