<?php

class boController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function newpesan()
	{
		return View::make('mahasiswa.pesanbomhs');
	}
	public function index()
	{
		return View::make('mahasiswa.bo');
	}
	public function formbo()
	{
		//return View::make('mahasiswa.formbo');
		if (Auth::check())
		{
			$user = Auth::user();
			$mahasiswa=$user->mahasiswa;
			return View::make('mahasiswa.formbo',compact('mahasiswa'));
		}
		else 
		{
	     return View::make('login');
		}
	}
	 public function pesanbomhs($idbo)
	 {
	 	$bo = Bimbingan_online::find($idbo);
	 	$pesan =$bo->pesanbimbingan;
	 	$mahasiswa = $bo->mahasiswa;
	 	$dosen = $bo->dosen;
	 	$aktor=null;
	 	$classx=null;
	 	//return $bo;
	 	return View::make('mahasiswa.pesanbomhs',compact('pesan','mahasiswa','dosen','classx','aktor','bo'));

	 }
	 public function listpesanbomhs()
	{
		
		if (Auth::check())
		{
			$user = Auth::user();
			$mahasiswa=$user->mahasiswa;
			$bp= $mahasiswa['bp'];
			$bo= Bimbingan_online::where('bp', $bp)->get();			
			return View::make('mahasiswa.listpesanbo',compact('mahasiswa','bo'));
		}
		else 
		{
	     return View::make('login');
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createpesan($idbo)
	{
		$rules =['isi'=>'required'];
		$id = $idbo;
		$validator = Validator::make(Input::all(),$rules);
		$url ='pesanbomhs/'.$id;
		
		if ($validator -> fails())
		{
		
			return Redirect::to($url)->withErrors($validator);
		}
		else
		{
			
			$pesan = new Pesan();
			$pesan->id_bo = $idbo;
			$pesan->from = 2;
			$pesan->status_read=0;
			$pesan->isi = Input::get('isi');
			$pesan->save();
            //kembali ke form bo
            Session::flash('message', 'Pesan Terkirim');
            return Redirect::to($url);

		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//untuk menyimpan pesan 
		$rules=array(
           'ipk' => 'required',
           'ips' => 'required',
           'matkulnilaiCkur' => 'required',
           'matkulnilaiD' => 'required',
           'matkulnilaiE' => 'required');
		$validator = Validator::make(Input::all(),$rules);
		if ($validator -> fails())
		{
			//jika salah kembali ke form bo
			return Redirect::to('formbo')->withErrors($validator);
		}
		else
		{
			//jika benar simpan ke database
			//return Bimbingan_online::all();
			$user = Auth::user();
			$mahasiswa=$user->mahasiswa;
			$bo = new Bimbingan_online();
			$bo-> bp = $mahasiswa->bp;
			$bo-> nama = $mahasiswa->nama;
			$bo-> ipk = Input::get('ipk');
			$bo-> ips = Input::get('ips');
			$bo-> matkulnilaiCkur = Input::get('matkulnilaiCkur');
			$bo-> matkulnilaiD = Input::get('matkulnilaiD');
			$bo-> matkulnilaiE = Input::get('matkulnilaiE');
			$bo-> pesan = Input::get('pesan');
			$bo-> nip = Input::get('nip');
			$bo->save();
            //kembali ke form bo
            Session::flash('message', 'Hey Data kamu udah kesimpan');
            return Redirect::to('bo');

		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
