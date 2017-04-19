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

    public function photoAction()
    {
        return $this->render('ProjetWebBDEBundle:Default:photo.html.twig');
    }


}
