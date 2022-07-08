<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Blog::create([
            'title'=>'Format de publication dimage',
            'image'=>'assets/images/story/01.jpg',
            'description'=>'Faites évoluer en toute transparence une préparation Web unique avec
                            Collabor ativement fabriquer le meilleur de la race et
                            vacances à travers'
        ]);
        App\Blog::create([
            'title'=>'Format de publication dimage',
            'image'=>'assets/images/story/02.jpg',
            'description'=>'Faites évoluer en toute transparence une préparation Web unique avec
                            Collabor ativement fabriquer le meilleur de la race et
                            vacances à travers'
        ]);
        App\Blog::create([
            'title'=>'Format de publication dimage',
            'image'=>'assets/images/story/03.jpg',
            'description'=>'Faites évoluer en toute transparence une préparation Web unique avec
                            Collabor ativement fabriquer le meilleur de la race et
                            vacances à travers'
        ]);
    }
}
