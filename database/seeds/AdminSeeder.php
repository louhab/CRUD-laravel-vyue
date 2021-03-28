<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('1234'),
            'remember_token'=>Str::random(10),
            'admin'=>1
        ]);
    }
}
