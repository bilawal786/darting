<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\About::create([
            'title1'=>'À propos de nos fléchettes',
            'title2'=>'Tout commence par un rendez-vous',
            'count1'=>'552',
            'count2'=>'547',
            'count3'=>'534',
            'count4'=>'516',
        ]);
    }
}
