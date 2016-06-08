<?php

use GuzzleHttp\Client;
class krsDosenController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = Auth::user();//untuk mengambil data user yang login
		$dosen=$user->dosen;//untuk mengambil data dosen yang sesuai dengan data login (siapa yang login saat ini)
		$url = 'http://localhost/portal/public/api/mahasiswa/'.$dosen->nip;
		$dataMHS = json_decode(file_get_contents($url), true);
		// "<pre>".dd($dataMHS)."</pre>";
		return View::make('dosen.krshome',compact('dosen','dataMHS'));

		// return View::make('dosen.krshome');
	}
	public function detailkrs($nim)
	{
		$url1 = 'http://localhost/portal/public/api/infomhs/'.$nim;
		$dataInfo = json_decode(file_get_contents($url1), true);
		 return View::make('dosen.detailkrs',compact('dosen','dataInfo'));	
		
		// return View::make('dosen.detailkrs');
	}

	public function getKRS()
	{
		$tahun = Input::get('tahun');
		$semester = Input::get('semester');
		$mahasiswa = Input::get('nim');
		$url = 'http://localhost/portal/public/api/krs/'.$mahasiswa.'/'.$tahun.'/'.$semester;
		$dataKRS = json_decode(file_get_contents($url), true);
		$jmlsks=0;
		//return "<pre>".dd($dataKRS)."</pre>";
		return View::make('dosen.detailkrs',compact('mahasiswa','dataKRS','tahun','semester','jmlsks'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
