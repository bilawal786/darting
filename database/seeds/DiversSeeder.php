<?php

use Illuminate\Database\Seeder;

class DiversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Divers::create([
            'name'=>'Divers en Visio',
            'image'=>'Divers/diversenvesio.jpg'
        ]);
        App\Divers::create([
            'name'=>'Anniversaire',
            'image'=>'Divers/anniversaire.jpg'
        ]);
        App\Divers::create([
            'name'=>'Chasse-peche',
            'image'=>'Divers/chassepech.jpg'
        ]);
        App\Divers::create([
            'name'=>'Apprentissage-Atelier',
            'image'=>'Divers/apprentissageatelier.jpg'
        ]);
        App\Divers::create([
            'name'=>'Bricolage-jardinage',
            'image'=>'Divers/Bricolage-jardinage.jpg'
        ]);
        App\Divers::create([
            'name'=>'Couture-Broderie',
            'image'=>'Divers/Couture-Broderie.jpg'
        ]);
        App\Divers::create([
            'name'=>'Conference',
            'image'=>'Divers/Conference.jpg'
        ]);
        App\Divers::create([
            'name'=>'Cuisine',
            'image'=>'Divers/Cuisine.jpg'
        ]);
        App\Divers::create([
            'name'=>'Litterature',
            'image'=>'Divers/Litterature.jpg'
        ]);
        App\Divers::create([
            'name'=>'Musique',
            'image'=>'Divers/Musique.jpg'
        ]);
        App\Divers::create([
            'name'=>'Photographie',
            'image'=>'Divers/Photographie.jpg'
        ]);
        App\Divers::create([
            'name'=>'Salon-seminaire',
            'image'=>'Divers/Salon-seminaire.jpg'
        ]);
        App\Divers::create([
            'name'=>'Voyage-Sejours',
            'image'=>'Divers/Voyage-Sejours.jpg'
        ]);
    }
}
