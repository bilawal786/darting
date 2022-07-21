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
            'sport' => '["1"]',
            'sortie' => '["1"]',
            'game' => '["1"]',
            'divers' => '["1"]',
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
            'sport' => '["1"]',
            'sortie' => '["1"]',
            'game' => '["1"]',
            'divers' => '["1"]',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'User1',
            'lname' => '01',
            'email' => 'user1@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'France',
            'country' => 'France',
            'sport' => '["1"]',
            'sortie' => '["1"]',
            'game' => '["1"]',
            'divers' => '["1"]',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'User2',
            'lname' => '01',
            'email' => 'user2@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'France',
            'country' => 'France',
            'sport' => '["1"]',
            'sortie' => '["1"]',
            'game' => '["1"]',
            'divers' => '["1"]',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'User3',
            'lname' => '01',
            'email' => 'user3@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'France',
            'country' => 'France',
            'sport' => '["1"]',
            'sortie' => '["1"]',
            'game' => '["1"]',
            'divers' => '["1"]',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'User4',
            'lname' => '01',
            'email' => 'user4@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'France',
            'country' => 'France',
            'sport' => '["1"]',
            'sortie' => '["1"]',
            'game' => '["1"]',
            'divers' => '["1"]',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'User5',
            'lname' => '01',
            'email' => 'user5@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'France',
            'country' => 'France',
            'sport' => '["1"]',
            'sortie' => '["1"]',
            'game' => '["1"]',
            'divers' => '["1"]',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'User6',
            'lname' => '01',
            'email' => 'user6@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'France',
            'country' => 'France',
            'sport' => '["1"]',
            'sortie' => '["1"]',
            'game' => '["1"]',
            'divers' => '["1"]',
            'password' => Hash::make('12345678'),
        ]);
    }
}
