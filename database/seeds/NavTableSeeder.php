<?php

use Illuminate\Database\Seeder;

class NavTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navs')->truncate();
        DB::table('navs')->insert([
        	'position'  => 1,
        	'name'  => 'INICIO',
        	'url'  => '/',
        ]);
    
        DB::table('navs')->insert([
        	'position'  => 2,
        	'name'  => 'NOSOTROS',
        	'url'  => 'nosotros',
        ]);
        	
        DB::table('navs')->insert([
        	'position'  => 3,
        	'name' => 'SERVICIOS',
        	'url'  => '/',
        ]);
    }
}
