
@extends('layouts.master2')
@section('content')
<script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
	</script>

<div class="container-fluid">  
		<div class="row">
				<div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/krs.png')}}" alt="" style="height:150px" "width:100px"></div>

						<div class="col-sm-8" style=""><h1>Kartu rencana Studi</h1>
								<p>Nomor Induk  &nbsp;  &nbsp;  : {{$mahasiswa-> bp}} </p>
								<p>Nama &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : {{$mahasiswa-> nama}}</p>
								<p>Maksimum SKS  :</p>
								{{Form::open(array('action' => 'krsController@getKRS')) }}
								<tr>
										<td>{{ Form::label('semester', 'Semester') }}</td>
										<td>: {{ Form::select('semester',array('1' => 'semester 1', '2' => 'semester 2'))  }}</td>
								</tr>
								<tr>
										<td>{{ Form::label('tahun', 'Tahun') }}</td>
										<td>: {{ Form::select('tahun',array('2015' => '2015', '2016' => '2016'))  }}</td>
								</tr>  
								<center>{{Form::submit('Lihat', array('class' => 'btn btn-success')) }}</center>
								{{Form::close() }}
						</div>
				</div>
				<div class="row">
						@if (Session::has('info'))
								<div class="alert alert-info">
										@foreach(Session::get('info') as $info)
										<p>{{$info}}</p>
										@endforeach
								</div>
						@endif
				</div>
				<br><br>
				@if(!empty($dataKRS))
		 				<div class="row">
		 						<div class="col-sm-2" style="">
		 						</div>
								<div class="col-sm-10" style="">
										<table class="table table-bordered">
												<thead>
														<tr>
															<th>Mata Kuliah</th>
															<th>Kode Mata Kuliah</th>
															<th>SKS</th>
														</tr>
												</thead>
												<tbody>
														@foreach($dataKRS as $key)
																<?php $jmlsks +=$key['sks_makul']; ?>
																<tr>
																		<td>{{$key['nama_makul']}}</td>
																		<td>{{$key['kode_makul']}}</td>
																		<td>{{$key['sks_makul']}}</td>
																</tr>
														@endforeach
														<td>Jumlah SKS</td>
														<td></td>
														<td>{{$jmlsks}}</td>
												</tbody>
										</table>
										<a href="{{URL::to('tambahkrs/'.$tahun.'/'.$semester)}}" class="btn btn-success btn-sm"> Tambah</a>
										<a href="{{URL::to('print/'.$tahun.'/'.$semester)}}" class="btn btn-success btn-sm"> Print</a>
								</div>
						</div>

						@elseif (!empty($tahun))
						<h1>Krs belum diisi</h1> <a href="{{URL::to('tambahkrs/'.$tahun.'/'.$semester)}}" class="btn btn-success btn-sm"> Tambah</a>
						@endif
		</div>
		<div class="row">
				<div class="col-sm-10" style=""></div>
				<div class="col-sm-2" style="">
						
    				<!-- <button onclick="printContent('div1')">print</button> -->
				</div>
		</div>
</div>

@stop