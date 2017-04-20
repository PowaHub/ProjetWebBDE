<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Controller;

use ProjetWebBDE\ProjetWebBDEBundle\Entity\activite;
use ProjetWebBDE\ProjetWebBDEBundle\Form\ActiviteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ActiviteController extends Controller
{
	public function addActiviteAction(Request $request)
    {
        $activite = new Activite();

        $form = $this->createForm(ActiviteType::class, $activite);


        $form->handleRequest($request);


        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();

            $this->addFlash(
                    'success',
                    'Vous activité a bien été ajoutée !'
            );

        }


        $formView = $form->createView();


        
        return $this->render('ProjetWebBDEBundle:Activites:creation_activite.html.twig', array(
                'form'=>$formView,

            ));
    }


}
