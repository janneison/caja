<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Anticipo extends Model {

	protected $table = 'lgn.anticipo';
	protected $primaryKey='id';
	//protected $with = array('propiedad');	
	protected $guarded = array();
	public static $rules = array();
	public $timestamps = false;

}
