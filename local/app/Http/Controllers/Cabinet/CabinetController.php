<?php namespace App\Http\Controllers\Cabinet;
use DB; 
use App\Categorie;
use Auth;
use Input;
use Validator;

class CabinetController extends \App\Http\Controllers\Controller {


	public function __construct()
	{
		//$this->middleware('cabinet');
	}

	public function getIndex()
	{
		$user_id = Auth::user()->id;
		$cat = DB::table('categories')->where('user_id','=',$user_id)->get();
		return view('templates.portfolio')->with('cat',$cat);
	}
	
	public function postIndex()
	{
		$data = Input::all();
		$rules = array('name' => array('required'));
		$validation = Validator::make($data,$rules);
		if($validation->fails())
		{
			$errors = $validation->messages();	
		}
		if(!empty($errors))
		{
			return redirect('cabinet')->withErrors($errors);
		}
		if(empty($errors))
		{
			DB::table('categories')->insert(array(
			'user_id' => Auth::user()->id,
			'name' => $data['name'],
			'showhide' => 'show',
			'created_at' => date('y-m-d h:i:s')
			));
			return redirect('cabinet');
		}
		
	}

}
