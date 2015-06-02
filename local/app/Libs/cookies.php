<?php namespace App\Libs;

use Cookie;

class cookies{

	public function __construct()
	{
		
	} 
	
	public function getall()//массив кук
	{
		$arr = array();
		foreach($_COOKIE as $key => $value)//$key - имя куки
		{
			$key = (int)$key;// именно наши куки - товары
			if($key > 0)
			{
				$arr[] = $key;
				
			}	
		}
			return $arr;
	}
	
	public function cookieall()//массив кук с их количеством
	{
		$arr = array();
		foreach($_COOKIE as $key => $value)
		{
			$key = (int)$key;
			if($key > 0)
			{
				$arr[$key] = Cookie::get($key);
				setcookie($key,NULL,-1,'/');// функция - delete cookie
				
			}	
		}
			return $arr;
	}

}
