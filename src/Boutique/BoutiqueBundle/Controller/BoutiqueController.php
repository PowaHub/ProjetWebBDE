<?php

namespace Boutique\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BoutiqueController extends Controller
{
	

    public function ajout_articleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('BoutiqueBundle:Categorie')->findAll();
        return $this->render('BoutiqueBundle:Default:ajout_article.html.twig', array("categories"=>$categories));
    }

    public function ajout_categorieAction()
    {
        return $this->render('BoutiqueBundle:Default:ajout_categorie.html.twig');
    }

    public function articleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('BoutiqueBundle:Article')->find($id);
        return $this->render('BoutiqueBundle:Default:article.html.twig',array("article"=> $article));
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
