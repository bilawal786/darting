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
            'image1'=>'assets/images/about/01.png',
            'image2'=>'assets/images/about/02.png',
            'image3'=>'assets/images/about/03.png',
            'image4'=>'assets/images/about/04.png',
            'ctitle1'=>'Membres au total',
            'ctitle2'=>'Membres en ligne',
            'ctitle3'=>'Hommes en ligne',
            'ctitle4'=>'Femmes en ligne',
            'count1'=>'561',
            'count2'=>'547',
            'count3'=>'534',
            'count4'=>'516',
        ]);
    }
}
