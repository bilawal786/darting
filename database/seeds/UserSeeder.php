<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Super',
            'lname' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => '0',
            'phone' => '00000000',
            'address' => 'France',
            'country' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'User',
            'lname' => '01',
            'email' => 'user@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'France',
            'country' => 'France',
            'password' => Hash::make('12345678'),
        ]);
    }
}
