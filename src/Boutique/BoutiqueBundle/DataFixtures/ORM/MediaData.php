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
        $media1->setNomMedia("Image BDE");
        $media1->setTypeMedia("Image");
        $media1->setUrlMedia("C:/Users/Pierre/Dropbox/Projet Web/MaquetteFinale/images/four.jpg");
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setNomMedia("Image BDE2");
        $media2->setTypeMedia("Image");
        $media2->setUrlMedia("C:/Users/Pierre/Dropbox/Projet Web/MaquetteFinale/images/exiamusique.jpg");
        $manager->persist($media2);

        $manager->flush();

        $this->addReference('media1',$media1);
        $this->addReference('media2',$media2);
    }

    /*php app/console doctrine:generate:entities BoutiqueBundle:Article*/

    public function getOrder()
    {
        return 2;
    }
}