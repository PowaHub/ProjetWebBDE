<?php

namespace Boutique\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BoutiqueController extends Controller
{
    public function boutiqueAction()
    {
        return $this->render('BoutiqueBundle:Default:boutique.html.twig');
    }
}
