<?php

namespace Boutique\BoutiqueBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Boutique\BoutiqueBundle\Entity\Article;

class ArticleData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setNomArt("Pull Exia");
        $article1->setDescriptionArt("Pull vendu par le cesi exia.");
        $article1->setPrixArt(20);
        $article1->setStockArt(100);
        $manager->persist($article1);

        $article2 = new Article();
        $article2->setNomArt("Mug Exia");
        $article2->setDescriptionArt("Mug vendu par le cesi exia.");
        $article2->setPrixArt(12);
        $article2->setStockArt(40);
        $manager->persist($article2);

        $manager->flush();

        $this->addReference('article1',$article1);
        $this->addReference('article2',$article2);
    }

        /*php app/console doctrine:generate:entities BoutiqueBundle:Article*/

    public function getOrder()
    {
        return 3;
    }
}