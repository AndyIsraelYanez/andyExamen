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
        Setting::factory(10)->create();
        User::factory(8)->create();
        Role::factory(10)->create();
         
        
    }
}
