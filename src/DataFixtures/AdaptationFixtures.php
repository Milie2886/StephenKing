<?php

namespace App\DataFixtures;

use App\Entity\Adaptation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AdaptationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $adapt1 = new Adaptation();
        $adapt1->setTitre("Shining")
                ->setAnneeSortie(1980)
                ->setImage("https://images-na.ssl-images-amazon.com/images/I/81TiKfQeJxL._AC_SL1500_.jpg")
                ->setType("Film")
                ->setContent("film d'horreur américano-britannique, est le onzième long métrage réalisé par Stanley Kubrick, avec Jack Nicholson, Shelley Duvall et Danny Lloyd dans les rôles principaux.")
                ->setLiens("https://fr.wikipedia.org/wiki/Shining_(film)");

        $manager->persist($adapt1);

        $adapt2 = new Adaptation();
        $adapt2->setTitre("La ligne verte")
                ->setAnneeSortie(2000)
                ->setImage("https://i.pinimg.com/originals/6a/ef/e2/6aefe21d089d55b5d50ab90fc5853d55.jpg")
                ->setType("Film")
                ->setContent("film américain écrit et réalisé par Frank Darabont, avec Tom Hanks, Michael Clarke Duncan, David Morse et Doug Hutchison dans les rôles principaux.")
                ->setLiens("https://fr.wikipedia.org/wiki/La_Ligne_verte_(film)");
                
        $manager->persist($adapt2);

        $adapt3 = new Adaptation();
        $adapt3->setTitre("The Outsider")
                ->setAnneeSortie(2020)
               ->setImage("https://pbs.twimg.com/profile_images/1266009671132942336/6_J2eeFi_400x400.jpg")
               ->setType("Série")
               ->setContent("The Outsider est une mini-série dramatique américaine en dix épisodes d’entre 50 et 60 minutes, créée par Richard Price et diffusée entre le 12 janvier et le 8 mars 2020 sur la chaîne HBO aux États-Unis avec Ben Mendelsohn, Cynthia Erivo et Jason Bateman dans les rôles principaux.")
               ->setLiens("https://fr.wikipedia.org/wiki/The_Outsider_(s%C3%A9rie_t%C3%A9l%C3%A9vis%C3%A9e)");
               
        $manager->persist($adapt3);


        $manager->flush();
    }
}
