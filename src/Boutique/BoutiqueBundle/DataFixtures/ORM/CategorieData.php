<?php

namespace Boutique\BoutiqueBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Boutique\BoutiqueBundle\Entity\Categorie;

class CategorieData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categorie();
        $categorie1->setNomCat("Categorie 1");
        $manager->persist($categorie1);

        $categorie2 = new Categorie();
        $categorie2->setNomCat("Categorie 2");
        $manager->persist($categorie2);

        $manager->flush();

        $this->addReference('categorie1',$categorie1);
        $this->addReference('categorie2',$categorie2);
    }

    /*php app/console doctrine:generate:entities BoutiqueBundle:Article*/

    public function getOrder()
    {
        return 2;
    }
}