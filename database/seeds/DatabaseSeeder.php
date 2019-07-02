<?php

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
        // Model::unguard();

        // $this->call('UsersTableSeeder');
        $this->call(UsersTableSeeder::class);
    }
}
