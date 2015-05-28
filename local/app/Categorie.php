<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

	protected $table = 'categories';
	
	public function portfolios()
	{
		$this->hasMany('\App\Portfolio','categories_id');
	}

}
