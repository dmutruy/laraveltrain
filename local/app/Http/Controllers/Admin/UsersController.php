<?php namespace App\Http\Controllers\Admin;
use DB; 
use App\User;
use Input;

class UsersController extends \App\Http\Controllers\Admin\MainController {


	public function __construct()
	{
		parent::__construct();
	}

	public function getIndex($id=NULL)
	{
		$user = DB::table('users')->where('id','=',$id)->get();
		return view('templates.user')->with('user',$user);
	}
	
	public function postIndex($id=NULL)
	{
		$data = Input::all();
		$users = DB::table('users')->where('id','=',$id)->first();
		mail($users->email,'Тема',$data['text']);
		return redirect('main');

	}
}
