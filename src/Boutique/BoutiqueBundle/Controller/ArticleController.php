<?php

namespace Boutique\BoutiqueBundle\Controller;

use Boutique\BoutiqueBundle\Entity\Article;
use Boutique\BoutiqueBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleController extends Controller
{
	public function addArticleAction()
    {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        $formView = $form->createView();


        
        return $this->render('BoutiqueBundle:Default:ajout_article.html.twig', array(
                'form'=>$formView,

            ));
    }


}
