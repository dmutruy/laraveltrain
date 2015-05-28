<?php namespace App\Http\Controllers\Admin;
use DB; 
use App\User;

class MainController extends \App\Http\Controllers\Controller {


	public function __construct()
	{
		$this->middleware('admin');
	}

	public function getIndex()
	{
		$user = User::all();
		return view('templates.main')->with('user',$user);
	}

}
