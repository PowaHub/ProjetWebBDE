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
        $article1->setNomArticle("Sweat Exia");
        $article1->setDescriptionArticle("Sweat vendu par le cesi exia.");
        $article1->setPrixArticle(20);
        $article1->setStockArticle(100);
        $article1->setMedia($this->getReference('media1'));
        $article1->setCategorieArticle($this->getReference('categorie1'));
        $manager->persist($article1);

        $article2 = new Article();
        $article2->setNomArticle("Carnet Exia");
        $article2->setDescriptionArticle("Carnet vendu par le cesi exia.");
        $article2->setPrixArticle(9.99);
        $article2->setStockArticle(40);
        $article2->setMedia($this->getReference('media3'));
        $article2->setCategorieArticle($this->getReference('categorie2'));
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setNomArticle("Sweat sans Capuche Exia");
        $article3->setDescriptionArticle("Sweat vendu par le cesi exia.");
        $article3->setPrixArticle(15);
        $article3->setStockArticle(100);
        $article3->setMedia($this->getReference('media2'));
        $article3->setCategorieArticle($this->getReference('categorie1'));
        $manager->persist($article3);

        $manager->flush();

        $this->addReference('article1',$article1);
        $this->addReference('article2',$article2);
        $this->addReference('article3',$article3);
    }

        /*php app/console doctrine:generate:entities BoutiqueBundle:Article*/

    public function getOrder()
    {
        return 4;
    }
}