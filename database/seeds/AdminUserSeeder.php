<?php

use Illuminate\Database\Seeder;
use App\Models\Auth\User;

class AdminUserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		$user = User::create([
				'name' => 'Super Admin',
				'email' => 'super@admin.com',
				'password' => bcrypt('admin'),
				'remember_token' => str_random(10),
			]);

		$user = User::create([
				'name' => 'Rifky Ekayama',
				'email' => 'rifky.ekayama@admin.com',
				'password' => bcrypt('admin'),
				'remember_token' => str_random(10),
			]);
	}
}
