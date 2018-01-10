<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'slug' => 'admin',
            'name' => 'Admin',
            
            
        ]);

        DB::table('roles')->insert([
            'slug' => 'lodge-admin',
            'name' => 'Lodge-admin',
            
            
        ]);
    }

    public function postRegister(Request $request)
    {
        //$user = Sentinel::registerAndActivate($request->all());
        $user = Sentinel::registerAndActivate(['']);

       
    }





}
