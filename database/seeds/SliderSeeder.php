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
            'image1'=>'assets/images/sliderimage.jpeg',
            'image2'=>'assets/images/1658294650images.jpg',
            'image3'=>'assets/images/1658294650images.jpg',
            ]);

    }
}
