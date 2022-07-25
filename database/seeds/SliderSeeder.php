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
            'image1'=>'images/1658443703images.jpg',
            'image2'=>'images/1658443711images.jpg',
            'image3'=>'images/1658443718images.jpg',
            'image4'=>'images/1658443703images.jpg',
            'image5'=>'images/1658443711images.jpg',
            'image6'=>'images/1658443718images.jpg',
            ]);

    }
}
