<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Slider::create([
            'image1'=>'assets/images/work/01.png',
            'image2'=>'assets/images/work/01.png',
            'image3'=>'assets/images/work/01.png',
            ]);

    }
}
