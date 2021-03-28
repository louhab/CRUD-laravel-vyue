<?php

use Illuminate\Database\Seeder;

use App\Categories;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
      
         factory(App\Categories::class,4)->create();
        
        




    }
}
