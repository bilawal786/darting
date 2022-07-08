<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'name' => 'Darting',
            'logo' => 'logo.png',
            'email' => 'daring@gmail.com',
            'phone' => '034527965',
            'address' => 'France',
            'link1' => 'www.facebook.com',
            'link2' => 'www.twitter.com',
            'link3' => 'www.google.com',
            'link4' => 'www.skype.com',
            'link5' => 'www.pintrest.com',
            'banarimage'=>'assets/images/01.png',
            'footercontent'=>'Energistically coordinate highly efficient procesr partnerships befor revolutionar growth strategie improvement viaing awesome
                              Energistically coordinate highly efficient procesr partnerships befor revolutionar growth Energistically coordinate highly efficient procesr partnerships befor revolutionar growth   '
        ]);
        \App\Plan::create([
            'name' => 'Forfait Premium',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    ',
           'price' => 10,
        ]);
    }
}
