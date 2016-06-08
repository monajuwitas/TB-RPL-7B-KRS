<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Bimbingan_online extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bimbingan_online';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	public $timestamps= false;
	public function pesanbimbingan(){
		return $this->hasMany('Pesan','id_bo','id');
	}
	public function dosen (){
		return $this->hasOne('Dosen','nip','nip');
	}
	public function mahasiswa (){
		return $this->hasOne('Mahasiswa','bp','bp');
	}

}
