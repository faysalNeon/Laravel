<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name'=> "nayem",
            'email'=>"nayem@online.com",
            'password'=>Hash::make('nayem@123')
        ]);
        factory(User::class, 50)->create();
    }
}
