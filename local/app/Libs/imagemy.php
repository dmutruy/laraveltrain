<?php namespace App\Libs;

use Image;

class imagemy{

  public function __construct()
  {
		echo'ok';	
  } 
	public function img($url=NULL)
	{
		$im = Image::make($url);
		                                             //$im->save() с путем хранения
		$im->resize(200,NULL,function($con)
		{
			$con->aspectRatio();                    //ф-ия пропорционального изменения размера
		});
		$pic_small = 's_'.time().'.jpg';
		$dir = $_SERVER['DOCUMENT_ROOT'].'/images/';
		$im ->save($dir.$pic_small);
		return $pic_small;	

	}

}
