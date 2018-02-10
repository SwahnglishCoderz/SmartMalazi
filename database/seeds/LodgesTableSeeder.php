<?php

use Illuminate\Database\Seeder;

class LodgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lodges')->insert([
            'lodge_id' => 1,
            'lodge_name' => 'Admin_Lodge',
			'disable_enable' => 0
        ]);

    }
}
