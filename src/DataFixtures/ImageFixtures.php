<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $image1 = new Image();
        $image1->setTitre("Simetierre")
               ->setUrl("https://www.lavisqteam.fr/wp-content/uploads/2019/05/714OW7qXoBL-633x1024.jpg");
        
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setTitre("Misery")
               ->setUrl("https://www.babelio.com/couv/CVT_Misery_6414.jpeg");
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setTitre("Mr Mercedes")
               ->setUrl("https://images-na.ssl-images-amazon.com/images/I/51Bk3TVNu0L._SX319_BO1,204,203,200_.jpg");
        $manager->persist($image3);

        $manager->flush();
    }
}
