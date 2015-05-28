<?php namespace App\Http\Controllers;
use App\Product;
use DB;
use Paginator;
use Redirect;

class ProductsController extends BaseController {


	public function __construct()
	{
		parent::__construct();
	}

	public function getIndex()
	{
		//$tovar = Tovar::all(); 
		$page = Product::where('name', '>', 0)->paginate(3);
		return view('templates.products')->with('page',$page);
	}

}


