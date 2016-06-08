<?php

class userController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/*public function login()
	{
		return View::make('krs.login');
	}*/

	public function home()
	{
		return dd(Auth::user());
		if (Auth::check())
		{
		   return View::make('home'); // The user is logged in...
		}
		else
		{
			return Redirect::to('login');
		}
	}
	
	public function profill()
	{
		return View::make('mahasiswa.profil');
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
/*	public function loginn()
	{
		return View::make('login');
	}*/

/*	public function authenticate()
	{
	if (Auth::attempt(array('bpnip' => Input::get('bpnip'), 'password' => Input::get('password'))))
	{
	   echo "login berhasil";
	}
	else{
	  return Redirect::to('login')->with('pesan_error', 'Login gagal, email atau password salah!');
	}
		}*/
	public function login()
	{
	    //return Hash::make('210595');
		return View::make('login');
	}

	public function authenticate()
	{
		$user = User::where('bpnip','=',Input::get('bpnip'))->get();
		$aktor=$user[0];
		$password=Input::get('password');
		if (count($user)==0)
		{
		   return Redirect::to('login')->with('pesan_error', 'Login gagal, No Identits anda tidak kai kenali, silakan periksa dan coba lagi');
		}
		else
		{
		  $aktor = $user[0];
		  if(Hash::check(Input::get('password'), $aktor->password))
		  {
		  	Auth::login($aktor);
		  	return Redirect::to('home');
		  }
		  else
		  {
		  	return Redirect::to('login')->with('pesan_error', 'Login gagal, password salah, silakan periksa dan coba lagi');
		  }
		}
	}
	 	public function actionlogin()
	{
		$id = Input::get('bpnip');
		$password = Input::get('password');
		return dd($email);
		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
		    return Redirect::intended('home');
		}
	}
public function logout()
	{
	    //return Hash::make('1');
		//return View::make('login');
	Auth::logout();
    return Redirect::to('login')->with('message', 'Your are now logged out!');
	}
}
