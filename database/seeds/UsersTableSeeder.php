<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory('App\User',10)->create();
    }
}
