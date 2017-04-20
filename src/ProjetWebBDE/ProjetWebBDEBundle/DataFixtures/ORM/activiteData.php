<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ProjetWebBDE\ProjetWebBDEBundle\Entity\activite;

class activiteData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $activite1 = new activite();
        $activite1->setnomActivite("Concours de Pizza");
        $activite1->setlieuActivite("eXia de Strasbourg");
        $activite1->setprixActivite(5);
        $activite1->setdateActivite(\DateTime::createFromFormat('d/m/Y', '04/06/2017'));
        $activite1->setheureActivite(\DateTime::createFromFormat('H:i', '12:30'));
        $activite1->setdescriptionActivite("Concours de Pizza organisé par les étudiants du Cesi eXia de Strasbourg.");
        $activite1->setRecurrenceActivite("Non");
        $manager->persist($activite1);

        $activite2 = new activite();
        $activite2->setnomActivite("LAN 2");
        $activite2->setlieuActivite("eXia de Strasbourg");
        $activite2->setprixActivite(10);
        $activite2->setdateActivite(\DateTime::createFromFormat('d/m/Y', '24/09/2017'));
        $activite2->setheureActivite(\DateTime::createFromFormat('H:i', '18:30'));
        $activite2->setdescriptionActivite("LAN organisé par les étudiants de l'association eXia.LAN du Cesi eXia de Strasbourg.");
        $activite2->setRecurrenceActivite("Non");
        $manager->persist($activite2);

        $activite3 = new activite();
        $activite3->setnomActivite("LAN 1");
        $activite3->setlieuActivite("eXia de Strasbourg");
        $activite3->setprixActivite(10);
        $activite3->setdateActivite(\DateTime::createFromFormat('d/m/Y', '04/02/2017'));
        $activite3->setheureActivite(\DateTime::createFromFormat('H:i', '19:00'));
        $activite3->setdescriptionActivite("LAN organisé par les étudiants de l'association eXia.LAN du Cesi eXia de Strasbourg.");
        $activite3->setRecurrenceActivite("Non");
        $manager->persist($activite3);

        $manager->flush();

        $this->addReference('activite1',$activite1);
        $this->addReference('activite2',$activite2);
        $this->addReference('activite3',$activite3);
    }
    public function getOrder()
    {
        return 4;
    }
}