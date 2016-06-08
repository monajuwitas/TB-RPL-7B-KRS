@extends('layouts.master2')
@section('content')
			<div class="container">
			<div class="row">
			    <div class="col-sm-2" style=""><img src="{{asset('/assets//css/img/bimbingan.png')}}" alt="" style="height:150px" "width:100px"></div>
			    <div class="col-sm-8" style=""><h1>List Pesan Bimbingan Online</h1>
			    	<table class="table table-bordered">
			            <thead>
			              <tr>
			                <th>Nip Dosen</th>
			                <th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
			            @foreach($bo as $key)
			              <tr>
			              
			           <td>{{$key['nip']}}</td>
			           <td><a href="{{URL::to('pesanbomhs/'.$key['id'])}}"><button type="button" class="btn btn-primary btn-sm ">Lihat Pesan </button></a></td>
			           </tr>
			            @endforeach			           
			            </tbody>
          			</table>
          			<a href="{{URL::to('newpesan')}}"><button type="button" class="btn btn-primary btn-sm ">Pesan Baru </button></a>
			    </div>
			    <div class="col-md-2" style=""></div>
			</div >
			
			</div>
			<div>
				
			</div>
		</div>

@stop