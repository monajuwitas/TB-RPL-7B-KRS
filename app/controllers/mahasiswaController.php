<?php

class mahasiswaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function profil()
	{
		if (Auth::check())
		{
			$user = Auth::user();
			$mahasiswa=$user->mahasiswa;
			return View::make('mahasiswa.profil',compact('mahasiswa'));
		}
		else 
		{
	     return View::make('login');
		}
	}
	public function krs()
	{
		if (Auth::check())
		{
		return View::make('mahasiswa.krs');
		}
		else
		{
			return View::make('login');
		}
	}
	public function print($tahun,$semester)
	{
	
		
		//$tahun = Input::get('tahun');
/*		//$semester = Input::get('semester');
		$url = 'http://localhost/portal/public/api/krs/'.$tahun.'/'.$semester;
		$datakelas = json_decode(file_get_contents($url), true);
		//return "<pre>".dd($dataKRS)."</pre>";
		return View::make('mahasiswa.print',compact('mahasiswa','krs','tahun','semester'));*/
	
	// 	$mahasiswa = Auth::user()->mahasiswa;
	// 	$url= 'http://localhost/portal/public/api/krs'.$mahasiswa->bp.'/'.$tahun.'/'.$semester;
	// 	$dataKRS=json_decode(file_get_contents($url),true);
	// 	$jumlahsks=0;
	// 	// return "<pre>".dd($dataKRS)."</pre>";
	// 	return View::make('mahasiswa.print', compact('mahasiswa','dataKRS','tahun','semester','jumlahsks'));

		$mahasiswa = Auth::user()->mahasiswa;
		$url = 'http://localhost/portal/public/api/krs/'.$mahasiswa->bp.'/'.$tahun.'/'.$semester;
		$dataKRS = json_decode(file_get_contents($url), true);
		$jmlsks=0;
		// return "<pre>".dd($dataKRS)."</pre>";
		return View::make('mahasiswa.print',compact('mahasiswa','dataKRS','tahun','semester','jmlsks'));

	}

		public function transkrip()
	{

		return View::make('mahasiswa.transkrip');
		
	}
	
	public function index()
	{
		//
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
