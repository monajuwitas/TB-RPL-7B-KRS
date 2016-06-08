@extends('layouts.master3')
@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/krs.png')}}" alt="" style="height:150px" "width:100px"></div>
      <div class="col-sm-8" style=""><h1>Kartu Rencana Studi</h1>
        <p>Nama :{{$dataInfo['nama']}}</p>
        <p>NIM :{{$dataInfo['nim']}}</p>
        <p>Program Studi : SI</p></div>
        <div class="col-md-2 see_more" style=""></div> 
  </div>  
  <br>
 
<div class="row">
    <div class="col-sm-2" style=""></div>
    <div class="col-sm-8" style="">
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>Mata Kuliah</th>
                  <th>Kode Mata Kuliah</th>
                  <th>SKS</th>
              </tr>
          </thead>
          @if(!empty($dataKRS))
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
          @endif
    </table>
        <center>{{Form::submit('Kembali', array('class' => 'btn btn-success')) }}</center>
</div>
<div class="col-md-2 see_more" style=""></div> 
</div>  
  
</div>

  
</div>

@stop 