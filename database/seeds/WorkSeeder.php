<?php

use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Work::create([
            'title1'=>'Comment ça marche?',
            'title2'=>'Vous nêtes quà 3 étapes dun grand rendezvous',
            'title3'=>'Créer un profil',
            'title4'=>'Trouver des correspondances',
            'title5'=>'Commencer à sortir ensemble',
            'image1'=>'assets/images/work/01.png',
            'image2'=>'assets/images/work/02.png',
            'image3'=>'assets/images/work/03.png',
            'descruption1'=>'Continua actualize ailers through robu and sertively concepze standards compliant commerce after technica sound.',
            'descruption2'=>'Continua actualize ailers through robu and sertively concepze standards compliant commerce after technica sound.',
            'descruption3'=>'Continua actualize ailers through robu and sertively concepze standards compliant commerce after technica sound.'
        ]);
    }
}
