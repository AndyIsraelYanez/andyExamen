<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //se agregaran datos 
        Setting::factory(8)->create();

        User::factory(8)->create();

        Role::factory(8)->create();
         
        
    }
}
