<?php

use Illuminate\Database\Seeder;

class JeuxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Jeux::create([
            'name'=>'Jeux en Visio',
            'image'=>'Jeux/jeuxenvisio.jpg'
        ]);
        App\Jeux::create([
            'name'=>'Babt foot',
            'image'=>'Jeux/babyfoot.jpg'
        ]);
        App\Jeux::create([
            'name'=>'Laser game',
            'image'=>'Jeux/lasergame.jpg'
        ]);
        App\Jeux::create([
            'name'=>'Loto',
            'image'=>'Jeux/loto.jpg'
        ]);
    }
}
