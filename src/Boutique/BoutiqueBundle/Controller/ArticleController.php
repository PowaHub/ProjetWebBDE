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


        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash(
                    'success',
                    'Votre article a bien été ajouté !'
            );

        }


        $formView = $form->createView();


        
        return $this->render('BoutiqueBundle:Default:ajout_article.html.twig', array(
                'form'=>$formView,

            ));
    }




    public function listArticleAction()
    {
        $repository = $this->getDoctrine()->getRepository('BoutiqueBundle:Article');

        $articles = $repository->findAll();




        return $this->render('BoutiqueBundle:Default:edition_article.html.twig', array(
                'articles'=>$articles,

        ));


    }


    public function editArticleAction(Request $request, Article $article)
    {
        $form = $this->createForm(ArticleType::class, $article);


        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $em->flush();

            $this->addFlash(
                    'success',
                    'Votre article a bien été modifié !'
            );

        }


        $formView = $form->createView();


        
        return $this->render('BoutiqueBundle:Default:ajout_article.html.twig', array(
                'form'=>$formView,

        ));


    }





    public function deleteArticleAction(Article $article)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($article);

        $em->flush();

            $this->addFlash(
                    'success',
                    'Votre article a bien été supprimé !'
            );

        return $this->redirectToRoute("boutique");


    }


}