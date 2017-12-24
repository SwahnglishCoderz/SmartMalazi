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
            'name' => 'Admin',
            'lastname' => 'US',
            'lodge_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'level' => 1,
        ]);
    }
}
