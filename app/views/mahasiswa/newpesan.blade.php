<!-- @extends('layouts.master2')
@section('content')
			<div class="container">
			<div class="row">
			    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/bimbingan.png')}}" alt="" style="height:150px" "width:100px"></div>
			    <div class="col-sm-8" style=""><h1>Bimbingan Online</h1></div>
			    <div class="col-md-2" style=""></div>
			</div >
			<div clas="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-2"><h4>Kepada</h4></div>
				<div class="col-sm-2">{{ Form::select('kepada',array('1' => '1511521001'))  }}</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br
			<div class="row">
					<form name="sentMessage" id="contactForm" novalidate action="send_mail.php">    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                    <div id="success"></div>
                                </div>
                                <center><button type="button" class="btn btn-primary btn-lg ">Kirim Pesan</button></center>
                            </div>
  <!--                   </form> -->
			</div>
		</div>

@stop -->


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
    {{HTML::ul($errors->all())}}
    {{Form::open(array('action' => 'boController@createpesan')) }}
    
    <h3><u> KETERANGAN </u> </h3>
    <br>
    <br>{{ Form::label('nip', 'Kepada') }}
    <br>{{ Form::select('nip',array('198201182008121002' => 'Surya Afnarius', '198301182008121001' => 'Dawirson', '198301182008121003' => 'Husnil Kamil', '198301182008121004' => 'Hasdi Putra', '198301182008121005' => 'Ricki Akbar','198003102012121003' => 'Haris Suryamen', '197901182008121001' => 'fajril Akbar','198101182008122001' => 'Meiza Silvana'))  }} <br> <br>

    {{Form::label('isi', 'Pesan') }}
    {{Form::textarea('isi', '', array('class' => 'form-control'))}}
    <br>
    <center>{{Form::submit('Kirimpesan', array('class' => 'btn btn-success')) }}</center>
    {{Form::close() }}
    </div>
    <div class="col-md-2" style=""></div>
  </div>
  
</div>

@stop