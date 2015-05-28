<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('UsersSeeder');
	}

}
class UsersSeeder extends Seeder {


	public function run()
	{
		Model::unguard();
		
		DB::table('users')->insert(array(
			'name' => 'vasiliy',
			'email' => 'fff@ff.ff',
			'password' => '',
			'is_admin' => '1',
			'created_at' => date('y-m-d h:i:s '),
			
		));
		DB::table('users')->insert(array(
			'name' => 'petiay',
			'email' => 'ppp@pp.pp',
			'password' => '',
			'is_admin' => '0',
			'created_at' => date('y-m-d h:i:s '),
		));
	}

}
