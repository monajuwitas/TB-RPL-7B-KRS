@extends('layouts.master3')
@section('content')

<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/krs.png')}}" alt="" style="height:150px" "width:100px"></div>
    <div class="col-sm-8" style=""><h1>List KRS Mahasiswa</h1></div>
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
                @foreach($dataMHS as $key)
                <tr>
                  <td>{{$key['nim']}}</td>
                  <td>{{$key['nama']}}</td>
                  <td>{{link_to('detailkrs/'.$key['nim'], 'Lihat KRS',['class'=>'btn btn-sm btn-info'])}}</td>
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