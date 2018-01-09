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
        //Only to be used to register the system admin.
        DB::table('users')->insert([
            'first_name' => 'Smart',
            'last_name' => 'Malazi',
            'lodge_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            
        ]);
    }
}
