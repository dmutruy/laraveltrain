<?php namespace App\Http\Controllers\Cabinet;
use DB; 
use App\Portfolio;
use Input;
use Auth;

class WorksController extends \App\Http\Controllers\Cabinet\CabinetController {


	public function __construct()
	{
		parent::__construct();
	}

	public function getIndex($id=NULL)
	{

		$port = \App\Portfolio::where('id','=',$id)->where('user_id','=',Auth::user()->id)->get();
		return view('templates.works')->with('port',$port);
	}
	
}
