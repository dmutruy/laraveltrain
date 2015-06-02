<?php namespace App\Http\Controllers\Cabinet;
use DB; 
use App\Acaunt;
use Auth;
use Input;
use Validator;
use \App\Http\Requests\Accaunt;


class AcauntController extends \App\Http\Controllers\Controller {


	public function __construct()
	{
		$this->middleware('auth');

	}

	public function getIndex()
	{
		$acc = Acaunt::where('user_id',  Auth::user()->id)->first();
		if(!$acc)
		{
			$acc = new Acaunt;//модель
		}
		return view('templates.acaunt')->with('acc',$acc);
	}
	
	public function postIndex(Accaunt $r)//<-request
	{
		$r['user_id'] = Auth::user()->id;
		Acaunt::updateOrcreate // Acaunt <- модель
		([
			'user_id' => Auth::user()->id,
		],
		$r->all());//сама все вставляет и проверяет $errors,все эл-ты форм, кроме токена
		return redirect('acaunt');
	}
	
}
