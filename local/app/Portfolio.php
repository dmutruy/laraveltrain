<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {
	
	protected $fillable = ['*'];
	
	protected $guarded = ['id','user_id'];

	public function categories()
	{
		$this->hasMany('\App\Categorie','categories_id');
	}

}
