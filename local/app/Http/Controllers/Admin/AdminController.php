<?php namespace App\Http\Controllers\Admin;
use DB; 
use App\Cart;
use Input;
use Paginator;
use App\Product;


class AdminController extends \App\Http\Controllers\Admin\MainController {


	public function __construct()
	{
		parent::__construct();
	}

	public function getIndex()
	{
		$tovar = Cart::where('id','>',0)->paginate(6);
		return view('templates.admins')->with('tovar',$tovar);
	}
	
	public function getDell($id = NULL)
	{
		$one = \App\Cart::find($id)->delete();
		return redirect('admin');
	}
	
}
//php artisan make:console Parse --command=parse:assign
//php artisan parse:assign --example=bar