@extends('layouts.master3')
@section('content')

<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/bimbingan.png')}}" alt="" style="height:150px" "width:100px"></div>
    <div class="col-sm-8" style=""><h1>List Bimbingan Online Mahasiswa</h1></div>
    <div class="col-md-2 see_more" style=""></div> 
  </div>  
 
 <div class="row">
    <div class="col-sm-2" style=""></div>
    <div class="col-sm-8" style="">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <td><a href="{{URL::to('detailbo')}}">1311521001</a></td>
                <td>AAA</td>
              </tr>
              <tr>
                <td><a href="{{URL::to('detailbo')}}">1311521002</a></td>
                <td>Moe</td>
              </tr>
              <tr>
                <td><a href="{{URL::to('detailbo')}}">1311521003</a></td>
                <td>Dooley</td>
              </tr> -->
              @foreach($databo as $key)
              <tr>
                <td>{{$key['bp']}}</td>
                <td><a href="{{URL::to('detailbo/'.$key['id'])}}"><button type="button" class="btn btn-primary btn-sm ">Lihat Pesan </button></a></td>
              </tr>
                @endforeach                
            </tbody>
          </table>
    </div>
    <div class="col-md-2 see_more" style=""></div> 
  </div>  
  
  </div>

  
</div>

@stop