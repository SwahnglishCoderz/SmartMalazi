<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//just to ensure that an admin is registered before everything takes on effect.
    	$user = Sentinel::registerAndActivate([
    			"email" => "admin@gmail.com",
				"first_name" => "admin",
				"last_name" => "SmartMalazi",
				"password" => "secret",
				"lodge_id" => 1,
    		]);

    	$role = Sentinel::findRoleBySlug('admin');

        $role->users()->attach($user);
    }
}
