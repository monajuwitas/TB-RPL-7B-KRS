<?php

class dosenController extends \BaseController {

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
			$dosen=$user->dosen;
			return View::make('dosen.profildosen',compact('dosen'));
		}
		else 
		{
	     return View::make('login');
		}

			
	}
	public function bomhs()
	{

		return View::make('dosen.bo');	
	}
	public function transkrip($nim)
	{
		$url1 = 'http://localhost/portal/public/api/infomhs/'.$nim;
		$url = 'http://localhost/portal/public/api/transkrip/'.$nim;
		$dataInfo = json_decode(file_get_contents($url1), true);
		$dataTranskrip = json_decode(file_get_contents($url), true);
		$url2 ='http://localhost/portal/public/api/getipk/'.$nim;
		$dataIPK= json_decode(file_get_contents($url2), true);
		// "<pre>".dd($dataIPK,$dataTranskrip,$dataInfo)."</pre>";
		return View::make('dosen.transkrip',compact('dosen','dataTranskrip','dataInfo','dataIPK'));	
	}

	public function mhs()
	{
		$user = Auth::user();//untuk mengambil data user yang login
		$dosen=$user->dosen;//untuk mengambil data dosen yang sesuai dengan data login (siapa yang login saat ini)
		$url = 'http://localhost/portal/public/api/mahasiswa/'.$dosen->nip;
		$dataMHS = json_decode(file_get_contents($url), true);
		//"<pre>".dd($dataMHS)."</pre>";
		return View::make('dosen.listmhs',compact('dosen','dataMHS'));

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
