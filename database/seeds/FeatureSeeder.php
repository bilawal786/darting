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
            'content1' => 'Darting, enfin un site pour vraiment organiser vos sorties.Vous voulez sortir, mais pas seul ? Vous ne savez pas comment vous organisez ?Bienvenue Darting soccupe de tout. Sortie celibataire, en couple ou en groupe à vous de choisirez n. Darting vous propose des sorties m ons de partenaires selon vos critères !
                            Chacun peut également proposer la sortie quil souhaite partager ou participer à celle qui lintéresse..
                             Soyez le Prince de la sortie en offrant le repas ou le cocktail aux participants de votre choix ',
            'image' => 'assets/images/02.png',
            'content2' => ' Darting est la solution contre la solitude qui est de plus en plus présente dans nos vies.
                                De plus en plus de
                             Un Français sur huit teste seul, la solitude touche désormais 5 millions de personnes, un phénomène qui sest surtout aggravé chez les plus âgés, mais qui épargne davantage les jeunes.
                             Plus dune personne âgée sur quatre est désormais seule.
                         Chez les plus jeunes, le phénomène touche désormais les 18-29 ans "jusqualors préservés", et chez les moins de 40 ans, la solitude a doublé en quelques années.
                             Il faut savoir que si un Français sur huit teste aujourdhui seul, un sur trois risque de le devenir.

                                 Alors que le nombre de ménages augmente, un tiers est composé dune seule personne, selon une étude de lINSEE

                        . En effet, quatre Français sur dix nont aucun contact avec leur famille au-delà de quelques rendez-vous annuels.
                        Un Français sur quatre nentretient pas de relations amicales soutenues et près de quatre sur dix entretiennent peu ou pas de contacts avec leurs voisins.
                         Bizarrement selon une étude, les réseaux sociaux virtuels ne compensent pas le manque de lien social : 80% en situation disolement objectif ne les fréquentent pas.',
        ]);
    }
}
