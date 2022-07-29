<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Country::create([
            'country'=>'Martinique'
        ]);
        \App\Country::create([
            'country'=>'Guadeloupe'
        ]);
        \App\Country::create([
            'country'=>'Guyane'
        ]);
        \App\Country::create([
            'country'=>'Réunion'
        ]);
    }
}
