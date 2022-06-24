<?php

use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Feature::create([
            'content1' => '',
            'image' => '',
            'content2' => '',
        ]);
    }
}
