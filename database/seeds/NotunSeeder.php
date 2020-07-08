<?php

use Illuminate\Database\Seeder;

class NotunSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}
