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
//        $this->call(UsersTableSeeder::class);
//        $this->call(DistrictTableSeeder::class);
//        $this->call(DivisionTableSeeder::class);
//        $this->call(GroupTableSeeder::class);
        factory(App\Tag::class, 50)->create();
        factory(App\User::class, 10)->create();
        factory(App\Post::class, 100)->create();
        factory(App\Comment::class, 50)->create();
        factory(App\Category::class, 10)->create();
    }
}
