<?php

namespace Boutique\BoutiqueBundle\Controller;

use Boutique\BoutiqueBundle\Entity\Article;
use Boutique\BoutiqueBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends Controller
{
	public function addArticleAction(Request $request)
    {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);


        $form->handleRequest($request);


        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash(
                    'success',
                    'Vous article a bien été ajouté !'
            );

        }


        $formView = $form->createView();


        
        return $this->render('BoutiqueBundle:Default:ajout_article.html.twig', array(
                'form'=>$formView,

            ));
    }


}
