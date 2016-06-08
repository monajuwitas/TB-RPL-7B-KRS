@extends('layouts.master2')
@section('content')

<div class="row">
    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/krs.png')}}" alt="" style="height:150px" "width:100px"></div>
    <div class="col-sm-8" style=""><h1>Kartu rencana Studi</h1>
        <p>Mata kuliah yang ditawarkan</p>
    </div>
</div>

   <div class="row">
    <div class="col-sm-2" style=""></div>
    <div class="col-sm-10" style="">
         {{Form::open(array('action' => 'krsController@store')) }}
         {{Form::hidden('tahunx', $tahun)}}
         {{Form::hidden('semester', $semester)}}
	    <table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Tahun</th>
	        <th>Semester</th>
	        <th>Kelas</th>
	        <th>Dosen</th>
	        <th>Kode Matkul</th>
	        <th>Nama</th>
	        <th>SKS</th>
	        <th>Keterangan Mengulang</th>
	        <th>Pernah Mengulang</th>
	        <th>Pilih</th>
	      </tr>
	    </thead>
	    <tbody>
	     @foreach($datakelas as $key)
      <tr>
        <td>{{$key['id']}}</td>
        <td>{{$key['tahun']}}</td>
        <td>{{$key['semester']}}</td>
     	<td>{{$key['nama_kelas']}}</td>
     	<td>{{$key['nama']}}</td>
     	<td>{{$key['kode']}}</td>
     	<td>{{$key['nama_makul']}}</td>
     	<td>{{$key['sks']}}</td>
     	<td>
        {{ Form::select('form1',array('0' => 'Mengulang', '1' => 'Tidak Mengulang'))  }}
     	</td>
     	<td>
     	{{ Form::select('form2',array('0' => 'Tidak Ada', '1' => '1', '2' => '2' , '3' => '3'))  }}
     	</td>
     	<td>
     	{{ Form::checkbox('kelasId[]',$key['id']) }}
     	</td>
      </tr>
      @endforeach
	     
	    </tbody>
	  </table>
      <center>{{Form::submit('Tambah', array('class' => 'btn btn-success')) }}</center>
      {{Form::close() }}
	</div>
</div>
@stop