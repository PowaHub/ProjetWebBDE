<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function associationAction()
    {
        return $this->render('ProjetWebBDEBundle:Default:association.html.twig');
    }

    public function bdeAction()
    {
        return $this->render('ProjetWebBDEBundle:Default:bde.html.twig');
    }

    public function contactAction()
    {
        return $this->render('ProjetWebBDEBundle:Default:contact.html.twig');
    }

    public function indexAction()
    {
        return $this->render('ProjetWebBDEBundle:Default:index.html.twig');
    }
    public function mentions_legalesAction()
    {
        return $this->render('ProjetWebBDEBundle:Default:mentions_legales.html.twig');
    }

    public function photoAction()
    {
        return $this->render('ProjetWebBDEBundle:Default:photo.html.twig');
    }

    public function activiteAction()
    {
        return $this->render('ProjetWebBDEBundle:Activites:activite.html.twig');
    }

    public function all_activiteAction()
    {
        return $this->render('ProjetWebBDEBundle:Activites:all_activite.html.twig');
    }

    public function ancienne_activiteAction()
    {
        return $this->render('ProjetWebBDEBundle:Activites:ancienne_activite.html.twig');
    }

    public function creation_activiteAction()
    {
        return $this->render('ProjetWebBDEBundle:Activites:creation_activite.html.twig');
    }

    public function nouvelle_activiteAction()
    {
        return $this->render('ProjetWebBDEBundle:Activites:nouvelle_activite.html.twig');
    }

    public function proposer_activiteAction()
    {
        return $this->render('ProjetWebBDEBundle:Activites:proposer_activite.html.twig');
    }

    public function validation_activiteAction()
    {
        return $this->render('ProjetWebBDEBundle:Activites:validation_activite.html.twig');
    }

    public function vote_activiteAction()
    {
        return $this->render('ProjetWebBDEBundle:Activites:vote_activite.html.twig');
    }


}
