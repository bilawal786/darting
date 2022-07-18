<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(SportsSeeder::class);
        $this->call(SortiesSeeder::class);
        $this->call(JeuxSeeder::class);
        $this->call(DiversSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(SliderSeeder::class);

    }


}
