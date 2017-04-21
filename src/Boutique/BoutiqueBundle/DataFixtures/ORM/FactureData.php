<?php

namespace Boutique\BoutiqueBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Boutique\BoutiqueBundle\Entity\Facture;

class FactureData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $facture1 = new Facture();
        $facture1->setTotalFacture(50);
        $facture1->setDateFacture(new \DateTime('now'));
        $manager->persist($facture1);

        $facture2 = new Facture();
        $facture2->setTotalFacture(50);
        $facture2->setDateFacture(new \DateTime('now'));
        $manager->persist($facture2);

        $manager->flush();

        $this->addReference('facture1',$facture1);
        $this->addReference('facture2',$facture2);
    }

    /*php app/console doctrine:generate:entities BoutiqueBundle:Article*/

    public function getOrder()
    {
        return 6;
    }
}