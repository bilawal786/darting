<?php

use Illuminate\Database\Seeder;

class SortiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \App\Sorties::create([
                'name'=>'Casino',
                'image'=>'Sorties/casino.jpg'
            ]);
        \App\Sorties::create([
            'name'=>'Cinema',
            'image'=>'Sorties/cinema.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Cirque',
            'image'=>'Sorties/circus.jpg'
        ]);
        \App\Sorties::create([
        'name'=>'Clubbing',
        'image'=>'Sorties/clubbing.jpg'
    ]);
        \App\Sorties::create([
            'name'=>'Concert',
            'image'=>'Sorties/concert.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Festival',
            'image'=>'Sorties/festival.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Karaoke',
            'image'=>'Sorties/karaoke.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Girls only',
            'image'=>'Sorties/cinema.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Soirees en Visio',
            'image'=>'Sorties/soireesenvisio.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Accrobranche',
            'image'=>'Sorties/accrobranche.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Afterwork',
            'image'=>'Sorties/afterwork.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Bowling',
            'image'=>'Sorties/bowling.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Barbecue',
            'image'=>'Sorties/barbecue.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Brunch',
            'image'=>'Sorties/brunch.jpg'
        ]);
        \App\Sorties::create([
            'name'=>'Shopping-Boutique',
            'image'=>'Sorties/shoppingbotique.jpg'
        ]);
        App\Sorties::create([
            'name'=>'Zoo-Fermes',
            'image'=>'Sorties/zoofermes.jpg'
        ]);

    }
}
