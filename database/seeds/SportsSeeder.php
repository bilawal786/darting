<?php

use Illuminate\Database\Seeder;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                \App\Sport::create([
                   'name'=>'Sports en Visio',
                    'image'=>'Sports/basketball.jpg'
                ]);
        \App\Sport::create([
            'name'=>'arts martix-Boxe',
            'image'=>'Sports/boxing.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Athletisme',
            'image'=>'Sports/athlethicsme.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Badminton-Squash',
            'image'=>'Sports/badmintion-squash.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Basket Ball',
            'image'=>'Sports/basketball.jpg'
        ]);
        \App\Sport::create([
            'name'=>'bubble_bump',
            'image'=>'Sports/bubble bump.jpg'
        ]);
        \App\Sport::create([
            'name'=>'cyclisme-VTT',
            'image'=>'Sports/cyclisem.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Danse',
            'image'=>'Sports/dance.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Equitation',
            'image'=>'Sports/equition.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Escalade',
            'image'=>'Sports/escalation.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Fitness-Musculation',
            'image'=>'Sports/fitnus-musculation.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Golf',
            'image'=>'Sports/golf.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Footbal american',
            'image'=>'Sports/american fotball.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Handball',
            'image'=>'Sports/handball.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Jogging',
            'image'=>'Sports/jogging.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Karting',
            'image'=>'Sports/karting.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Natation',
            'image'=>'Sports/natation.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Ski-Snowboard',
            'image'=>'Sports/saki-snowboard.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Sports motorises',
            'image'=>'Sports/sport-motorises.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Surf-Bodyboard',
            'image'=>'Sports/surf-bodyboard.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Tennis',
            'image'=>'Sports/tenns.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Tir a Larc',
            'image'=>'Sports/tir a iric.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Vollyball',
            'image'=>'Sports/vollyball.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Yoga-Meditation-Pilates',
            'image'=>'Sports/vollyball.jpg'
        ]);
        \App\Sport::create([
            'name'=>'Autre sport',
            'image'=>'Sports/autri sport.jpg'
        ]);


    }
}
