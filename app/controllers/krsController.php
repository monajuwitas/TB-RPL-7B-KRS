<?php
use GuzzleHttp\Client;
class krsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		if (Auth::check())
		{
			$user = Auth::user();
			$mahasiswa=$user->mahasiswa;
			return View::make('mahasiswa.krs',compact('mahasiswa'));
		}
		else 
		{
	     return View::make('login');
		}
	}
	public function tambahkrs()
	{
		return View::make('mahasiswa.tambahkrs');
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
		//return dd(Input::get('kelasId'));
		//localhst/nf/public/api/krs/$mahasiswa->id/$tahun/$semester/$kelasid;

		$user = Auth::user();
		$mahasiswa=$user->mahasiswa;
		$bp= $mahasiswa['bp'];
        $tahun=Input::get('tahunx');
        $semester=Input::get('semester');
        $idmk = Input::get('kelasId');
        $url = 'http://localhost/portal/public/api/listkelas/'.$tahun.'/'.$semester;
        $datakelas = json_decode(file_get_contents($url), true);
        foreach ($idmk as $idmk) {
        	$url='http://localhost/portal/public/api/krs/'.$bp.'/'.$tahun.'/'.$semester;
        	$client = new Client();
		    $res = $client->request('POST', $url,[
        'form_params' => [
            'kelasId' => $idmk
        ]]);
		    $result= $res->getBody();
		    $pesan=$result->getContents();
		    $key = array_search($idmk, array_column($datakelas, 'id'));
		    $makul = $datakelas[$key]['nama_makul'];
		    if($pesan =="OK"){
		    	$info = $makul. "Berhasil ditambahkan";
		    }
		    else{
		    	$info = $makul." gagal ditambahkan, ".$pesan;
		    }
		    $arrInfo[]=$info;
        }
        //return $arrInfo;
        /*$url='http://localhost/portal/public/api/krs/'.$bp.'/'.$tahun.'/'.$semester;
        	$client = new Client();
        	//return dd($re)
		    $res = $client->request('POST', $url,[
        'form_params' => [
            'kelasId' => $idmk[0]
        ]]);
		    $result= $res->getBody();
		    $arresult[]=$result->getContents();*/ 
		    Session::flash('info', $arrInfo);
			return Redirect::to('krs');

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
	public function getKRS()
	{
		
		$tahun = Input::get('tahun');
		$semester = Input::get('semester');
		$mahasiswa = Auth::user()->mahasiswa;
		$url = 'http://localhost/portal/public/api/krs/'.$mahasiswa->bp.'/'.$tahun.'/'.$semester;
		$dataKRS = json_decode(file_get_contents($url), true);
		$jmlsks=0;
		// return "<pre>".dd($dataKRS)."</pre>";
		return View::make('mahasiswa.krs',compact('mahasiswa','dataKRS','tahun','semester','jmlsks'));
	}
   

   public function getmatkul($tahun, $semester)
  {
   //       $tahun = Input::get('tahun');
		 // $semester = Input::get('semester');
  		$url = 'http://localhost/portal/public/api/listkelas/'.$tahun.'/'.$semester;
		$datakelas = json_decode(file_get_contents($url), true);
		//return "<pre>".dd($dataKRS)."</pre>";
		return View::make('mahasiswa.tambahkrs',compact('mahasiswa','datakelas','tahun','semester'));
  }


}