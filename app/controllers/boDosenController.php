<?php

class boDosenController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{}
	public function pesanbomhs($idbo)
	 {
	 	$bo = Bimbingan_online::find($idbo);
	 	$pesan =$bo->pesanbimbingan;
	 	$mahasiswa = $bo->mahasiswa;
	 	$dosen = $bo->dosen;
	 	$aktor=null;
	 	$classx=null;
	 	// return $bo;
	 	return View::make('dosen.tulispesan',compact('pesan','mahasiswa','dosen','classx','aktor','bo'));

	 }
	public function list()
	{
		if (Auth::check())
		{
			$user = Auth::user();
			$dosen=$user->dosen;
			$nip= $dosen['nip'];
			$databo= Bimbingan_online::where('nip', $nip)->get();			
		    // "<pre>".dd($databo)."</pre>";
			// return View::make('mahasiswa.listpesanbo',compact('mahasiswa','bo'));
			return View::make('dosen.listbo',compact('dosen','databo'));
		}
		else 
		{
	     return View::make('login');
		}	
	}
	public function tulispesan($idbo)
	{
		// return View::make('dosen.tulispesan');	
		$bo = Bimbingan_online::find($idbo);
	 	$pesan =$bo->pesanbimbingan;
	 	$mahasiswa = $bo->mahasiswa;
	 	$dosen = $bo->dosen;
	 	$aktor=null;
	 	$classx=null;
	 	//return $bo;
	 	return View::make('dosen.tulispesan',compact('pesan','mahasiswa','dosen','classx','aktor','bo'));
	}
	
	public function detail($id)
	{
		$bo = Bimbingan_online::find($id);
	 	$databimbingan =$bo;
	 	// return $databimbingan;
	 // 	return View::make('mahasiswa.pesanbomhs',compact('pesan'));
		return View::make('dosen.detailbomhs',compact('databimbingan'));	
	}

	public function listpesanbo()
	{
		// return View::make('dosen.listpesanbo');	
		if (Auth::check())
		{
			$user = Auth::user();
			$dosen=$user->dosen;
			$nip= $dosen['nip'];
			$list= Bimbingan_online::where('nip', $nip)->get();			
			// return "<pre>".dd($nip,$list)."</pre>";
			return View::make('dosen.listpesanbo',compact('dosen','list'));
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
		$url ='pesanbo/'.$id;
		
		if ($validator -> fails())
		{
		
			return Redirect::to($url)->withErrors($validator);
		}
		else
		{
			
			$pesan = new Pesan();
			$pesan->id_bo = $idbo;
			$pesan->from = 1;
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
