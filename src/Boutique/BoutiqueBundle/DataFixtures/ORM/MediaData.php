<?php

namespace Boutique\BoutiqueBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Boutique\BoutiqueBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setNomMedia("Image Sweat Capuche");
        $media1->setTypeMedia("Image");
        $media1->setUrlMedia("img_boutique/sweat_capuche.png");
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setNomMedia("Image Sweat");
        $media2->setTypeMedia("Image");
        $media2->setUrlMedia("img_boutique/sweat_s_capuche.png");
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setNomMedia("Image Carnet");
        $media3->setTypeMedia("Image");
        $media3->setUrlMedia("img_boutique/carnet_exia.jpg");
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setNomMedia("Image Mug");
        $media4->setTypeMedia("Image");
        $media4->setUrlMedia("img_boutique/mug_cesi_alternance.jpg");
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setNomMedia("Image Sweat Bordeaux");
        $media5->setTypeMedia("Image");
        $media5->setUrlMedia("img_boutique/sweat_bordeaux.jpg");
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setNomMedia("Image Sweat Bordeaux");
        $media6->setTypeMedia("Image");
        $media6->setUrlMedia("img_boutique/sweat_bordeaux.jpg");
        $manager->persist($media6);

        $manager->flush();

        $this->addReference('media1',$media1);
        $this->addReference('media2',$media2);
        $this->addReference('media3',$media3);
        $this->addReference('media4',$media4);
        $this->addReference('media5',$media5);
        $this->addReference('media6',$media6);
    }

    /*php app/console doctrine:generate:entities BoutiqueBundle:Article*/

    public function getOrder()
    {
        return 3;
    }
}