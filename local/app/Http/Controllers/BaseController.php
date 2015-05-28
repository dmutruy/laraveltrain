<?php namespace App\Http\Controllers;

use DB; 

class BaseController extends Controller {


	public function __construct()
	{
		
	}

	public function index($id='index')
	{
		$text = DB::table('maintexts')->where('url','=',$id)->get(); 
		return view('templates.index')->with('text',$text);
	}

}
