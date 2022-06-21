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
            'sitename' => 'Darting',
            'logo' => 'src/assets/img/logo2.svg',
            'link1' => 'www.facebook.com',
            'link2' => 'www.twitter.com',
            'link3' => 'www.google.com',

        ]);
    }
}
