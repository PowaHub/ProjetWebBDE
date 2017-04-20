<?php

namespace Boutique\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BoutiqueController extends Controller
{
	

    public function ajout_articleAction()
    {
        return $this->render('BoutiqueBundle:Default:ajout_article.html.twig');
    }

    public function ajout_categorieAction()
    {
        return $this->render('BoutiqueBundle:Default:ajout_categorie.html.twig');
    }

    public function articleAction()
    {
        return $this->render('BoutiqueBundle:Default:article.html.twig');
    }

    public function boutiqueAction()
    {

        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('BoutiqueBundle:Article')->findAll();
        $categories = $em->getRepository('BoutiqueBundle:Categorie')->findAll();
        return $this->render('BoutiqueBundle:Default:boutique.html.twig',array("articles"=> $articles, "categories"=> $categories));
    }

    public function edition_articleAction()
    {
        return $this->render('BoutiqueBundle:Default:edition_article.html.twig');
    }

}
