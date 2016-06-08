
@extends('layouts.master2')
@section('content')
	
<script>
	function printContent(el)
	{
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
	window.onload=function()
	{
		printContent('div1');
	}

	</script>

	<div id="div1">
		<h3> Kementrian Pendidikan dan Kebudayaan</h3>
				<h3> Universitas Andalas</h3>
				<center><u>Kartu Rencana Studi</u></center>
				<p>Nama : {{$mahasiswa-> nama}} </p>
				<p>Nim : {{$mahasiswa-> bp}} </p>
				<p>Program Studi : Sistem Informasi </p>
				<div class="row">
		 						<div class="col-sm-2" style=""></div>
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
								</div>
						</div>
		</div>
	</div>
	<div style="text-align: right;">
	Mengetahui<br>
	Dosen PA
	<br><br><br><br>
	______________
	</div>
@stop