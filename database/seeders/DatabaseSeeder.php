<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\DatesTableSeeder;
use Database\Seeders\ServicesTableSeeder;
use Database\Seeders\SettingsTableSeeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            
            UsersTableSeeder::class,
            SettingsTableSeeder::class,
            ServicesTableSeeder ::class,
            DatesTableSeeder::class,

            
        ]);
    }
}
