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
            'image1'=>'assets/images/about/01.png',
            'image2'=>'assets/images/about/02.png',
            'image3'=>'assets/images/about/03.png',
            'image4'=>'assets/images/about/04.png',
            'count2'=>'547',
            'count3'=>'534',
            'count4'=>'516',
        ]);
    }
}
