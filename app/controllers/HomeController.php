<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		
		return View::make('hello');
	}

	public function index()
	{
		
		//return Hash::make('1345');
		if (Auth::check())
		{
		   $user = Auth::user();
		   $status=$user->status;
		   if ($status==1)
		   {
		   	$dosen=$user->dosen;

		   	return View::make('dosen.home',compact('dosen'));
		   }
		   else
		   {
		   	$mahasiswa=$user->mahasiswa;
		   	return View::make('mahasiswa.home',compact('mahasiswa'));
		   }

		    // The user is logged in...
		}
		else
		{
			return Redirect::to('login');
		}
	}

}
