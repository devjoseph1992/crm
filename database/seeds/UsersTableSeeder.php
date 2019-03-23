<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Florina',
            'email' => 'florinajohnjoseph@gmail.com',
            'role' =>  'admin',
            'password' => Hash::make('password'),
        ]);
    }
}
