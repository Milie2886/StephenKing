<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $book1 = new Livre();
        $book1->setTitre("Shining, l'enfant lumière")
             ->setAnneeSortie(1977)
             ->setImage("https://p3.storage.canalblog.com/32/39/1299180/102362562_o.jpg")
             ->setContent("Jack Torrance est un homme instruit mais au tempérament colérique. Il tente de reconstruire sa vie et celle de sa famille après la perte de son emploi d’enseignant due à un élan de violence. Ayant arrêté de boire, il accepte un emploi de gardien dans un grand hôtel isolé dans les montagnes, et fermé en hiver. Il emménage dans l’hôtel Overlook (dans les montagnes du Colorado) avec sa femme Wendy et son fils Danny. Ce dernier possède des dons de médium (le shining du titre) et est sensible aux forces surnaturelles. Le jour de son arrivée à l'hôtel, Danny fait la connaissance de Dick Hallorann, le cuisinier de l'hôtel, qui possède lui aussi le shining mais à un degré bien moindre que le jeune garçon. Hallorann met en garde Danny contre les dangers de l'hôtel qui serait doté d'une conscience, et possédé par des esprits.")
             ->setLiens("https://fr.wikipedia.org/wiki/Shining,_l%27enfant_lumi%C3%A8re");
        $manager->persist($book1);

        $book2 = new Livre();
        $book2->setTitre("La ligne verte")
             ->setAnneeSortie(1996)
             ->setImage("https://products-images.di-static.com/image/stephen-king-la-ligne-verte-coffret-6-episodes-episode-1-deux-petites-filles-mortes/9782277341550-475x500-1.jpg")
             ->setContent("Aujourd'hui centenaire et vivant dans une maison de retraite, Paul Edgecombe écrit son histoire. Il était en 1932 le gardien-chef du bloc E (réservé aux condamnés à mort et surnommé « la ligne verte ») du pénitencier de Cold Mountain, en Louisiane. Il tente, avec son équipe composée des gardiens Brutus « Brutal » Howell, Dean Stanton et Harry Terwilliger, de faire en sorte que les conditions de vie soient les plus humaines possibles pour les condamnés mais Percy Wetmore, un gardien nouveau venu qui a des relations haut placées, lui donne du fil à retordre à ce niveau car il ne cesse de harceler les prisonniers. John Caffey, un gigantesque Noir condamné pour le viol et le double meurtre de deux fillettes, fait son arrivée dans le bloc E, où est déjà détenu Édouard Delacroix, un cajun pyromane. Malgré le meurtre affreux pour lequel il est condamné, Caffey semble être d'un naturel doux et timide.")
             ->setLiens("https://fr.wikipedia.org/wiki/La_Ligne_verte_(roman)");
        $manager->persist($book2);

        $book3 = new Livre();
        $book3->setTitre("L'outsider")
             ->setAnneeSortie(2018)
             ->setImage("https://static.fnac-static.com/multimedia/Images/FR/NR/e4/95/a0/10524132/1540-1/tsp20191126070352/L-Outsider.jpg")
             ->setContent("Le corps d'un jeune garçon de onze ans, qui a été violé et partiellement dévoré, est retrouvé dans un parc de la petite ville de Flint City, dans l'Oklahoma. Des empreintes digitales et plusieurs témoignages accablants conduisent rapidement l'enquête vers Terry Maitland, professeur d'anglais et entraîneur de l'équipe de jeunes de baseball, père de famille et citoyen respectable. L'inspecteur Ralph Anderson, dont Maitland a entraîné le fils, l'arrête publiquement lors d'un match de baseball. Maitland clame son innocence et fournit un alibi confirmé par des témoins : le jour du meurtre, il était dans une ville distante de cent kilomètres pour assister à une conférence.")
             ->setLiens("https://fr.wikipedia.org/wiki/L%27Outsider_(roman)");
        $manager->persist($book3);

        $manager->flush();
    }
}
