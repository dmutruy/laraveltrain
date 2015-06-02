<?php namespace App\Http\Controllers;
use App\Product;
use DB;
use Paginator;
use Redirect;
use App;
use Cookie;
use App\Cart;
use Input;





class CartController extends \App\Http\Controllers\ProductsController {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function postAdd($id = NULL)
	{
		$temp = Cookie::make($id,$_POST['col'],300);//$id - $id  товара,POST['col'] - количество товара
		return redirect::to('cart')->withCookie($temp);
	}
	
	public function getIndex()
	{ 
		$all = App::make('App\Libs\Cookies')->getall();//метод 1
		$products = Product::whereIn('id',$all)->get(); //whereIn может принимать массив
		return view('templates.cart')->with('products',$products);
	}
	
	public function getDell($id = NULL)
	{
		$temp = Cookie::make($id,NULL,-1);// Cookie::make создает зашиврованный cookie
		return redirect::to('cart')->withCookie($temp);
	}
	
	public function postUser()
	{
		$data = Input::all();
		$arr = App::make('App\Libs\Cookies')->cookieall();
		
		$cook = new Cart;
		$cook->body = serialize($arr);
		$cook->phone = $data['phone'];
		$cook->email = $data['email'];
		$cook->status = 'new';
		$cook->save();
		return redirect('/');
		
		
		
	}
}
