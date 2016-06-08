@extends('layouts.master3')
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
    <h4><table>
        <tr>
            <td>NIM</td>
            <td>: {{$databimbingan->bp}}</td>
        </tr>
        <tr> 
            <td>Nama</td>
            <td>: {{$databimbingan->nama}}</td>
        </tr>
        <tr> 
            <td>Keterangan</td>
            <td></td>
        </tr>
        <tr>
            <td>IPK</td>
            <td>: {{$databimbingan->ipk}}</td>
        </tr>
        <tr>
            <td>IPS</td>
            <td>: {{$databimbingan->ips}}</td>
        </tr>
        <tr>
            <td>Nilai C-</td>
            <td>: {{$databimbingan->matkulnilaiCkur}}</td>
        </tr>
        <tr>
            <td>Nilai D</td>
            <td>: {{$databimbingan->matkulnilaiD}}</td>
        </tr>
        <tr>
            <td>Nilai E</td>
            <td>: {{$databimbingan->matkulnilaiE}}</td>
        </tr>
        <tr>
            <td>Rencana Perbaikan</td>
            <td>: {{$databimbingan->pesan}}</td>
        </tr>

    </table></h4>
    
    <center><a href="{{URL::to('tulispesan')}}">{{Form::submit('Kirimpesan', array('class' => 'btn btn-success')) }}</a></center>
    </div>
    <div class="col-md-2" style=""></div>
  </div>
  
</div>

@stop