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
        ]);
    }
}
