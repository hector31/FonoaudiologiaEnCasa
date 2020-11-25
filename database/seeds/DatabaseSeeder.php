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
        factory('App\publicaciones_pacientes',10)->create();
        // factory('App\User',100)->create()->each(function($user){
        //     $user->posts()->save(factory('App\Post')->make());
        // });
        // factory('App\User',5)->create();
        
    }
}
