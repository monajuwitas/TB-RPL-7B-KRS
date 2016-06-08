
@extends('layouts.master3')
@section('content')

<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/mahasiswa.png')}}" alt="" style="height:150px" "width:100px"></div>
    <div class="col-sm-8" style=""><h1>Mahasiswa Bimbingan</h1>
      <p>Nama : {{$dataInfo['nama']}}</p>
      <p>NIM  :{{$dataInfo['nim']}}</p>
      <p>IPK  :{{$dataIPK}}</p>
    </div>
    <div class="col-md-2 see_more" style=""></div> 
  </div>  
 
 <div class="row">
    <div class="col-sm-2" style=""></div>
    <div class="col-sm-8" style="">
        <p>Transkrip {{$dataInfo['nama']}}</p>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>Kode Mata Kuliah</th>
                <th>Mata Kuliah</th>
                <th>Semester</th>
                <th>Nilai</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dataTranskrip as $key)
                <tr>
                  <td>{{$key['kode_makul']}}</td>
                  <td>{{$key['nama_makul']}}</td>
                  <td>{{$key['semester']}}</td>
                  <td>{{$key['nilai']}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <center><a href="{{URL::to('mhs')}}"> {{Form::submit('Kembali', array('class' => 'btn btn-success')) }}</a></center>
    </div>
    <div class="col-md-2 see_more" style=""></div> 
  </div>  
  
  </div>

  
</div>

@stop