<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Comment;
use App\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        // factory(App\User::class,10)->create();
        // factory(App\Category::class,10)->create();
        // factory(App\Post::class,10)->create();
        // factory(App\Comment::class,10)->create();




    }
}
