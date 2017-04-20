<?php

namespace Boutique\BoutiqueBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Boutique\BoutiqueBundle\Entity\Composer;

class ComposerData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $composer1 = new Composer();
        $composer1->setPrixAchat(50);
        $composer1->setDateAchat(new \DateTime('now'));
        $composer1->setHeureAchat(new \DateTime('now'));
        $manager->persist($composer1);

        $composer2 = new Composer();
        $composer2->setPrixAchat(50);
        $composer2->setDateAchat(new \DateTime('now'));
        $composer2->setHeureAchat(new \DateTime('now'));
        $manager->persist($composer2);

        $manager->flush();

        $this->addReference('composer1',$composer1);
        $this->addReference('composer2',$composer2);
    }

    /*php app/console doctrine:generate:entities BoutiqueBundle:Composer*/

    public function getOrder()
    {
        return 2;
    }
}