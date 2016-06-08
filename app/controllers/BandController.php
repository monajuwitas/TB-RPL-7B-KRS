<?php

class BandController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bands = Band::all();
		return View:: make('bands.index')->with('bands',$bands);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('$bands.create');
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'nama' => 'required',
			'email' => 'required|email',
			'aliran' => 'required|numeric'
			);
		$validator = Validator::make(Input::all(),$rules);

		if ($validator->fails())
		{
			return Redirect::to('bands/create')->withErrors($validator);
		}
		else
		{
			$band = new Band
		
			Seesion::flash('message','Successfully create band!');
			return Redirect::to('bands');
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
		$band=Band::find($id);
		return View::make('bands.show')->with('band',$band);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$band = Band::find($id);
		return View::make('bands.edit')->with('band',$band);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array (
			'nama'		=> 'required',
			'email'		=> 'required|email'
			'aliran'	=> 'required|numeric'
			);
		if ($validator->fails){
			return Redirect::to('bands/'.$id.'/edit')->withErrors($validator);
		}
		else{
			$band = Band::find($id);
			$band->nama= Input::get('nama');
			$band->email=Input::get('email');
			$band->aliran=Input::get('aliran');
			$band->save();

			Session::flash('message','succs update');
			return Redirect::to('bands');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$band = Band::find($id)
		returnR Redirect::to('bands')
		
	}


}

