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
        
        \App\Models\Setting::factory(8)->create();

        \App\Models\User::factory(8)->create();

        \App\Models\Role::factory(8)->create();
         
        
    }
}
