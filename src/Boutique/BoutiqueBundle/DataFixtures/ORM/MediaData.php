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

        $manager->flush();

        $this->addReference('media1',$media1);
        $this->addReference('media2',$media2);
        $this->addReference('media3',$media3);
    }

    /*php app/console doctrine:generate:entities BoutiqueBundle:Article*/

    public function getOrder()
    {
        return 3;
    }
}