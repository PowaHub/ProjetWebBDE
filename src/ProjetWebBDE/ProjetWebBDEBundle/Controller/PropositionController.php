<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Controller;

use ProjetWebBDE\ProjetWebBDEBundle\Entity\proposition_activite;
use ProjetWebBDE\ProjetWebBDEBundle\Form\PropositionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PropositionController extends Controller
{
    public function addPropositionAction(Request $request)
    {
        $proposition_activite = new Proposition_activite();

        $form = $this->createForm(PropositionType::class, $proposition_activite);


        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proposition_activite);
            $em->flush();

            $this->addFlash(
                'success',
                'Votre proposition a bien été ajoutée !'
            );

        }


        $formView = $form->createView();



        return $this->render('ProjetWebBDEBundle:Activites:proposer_activite.html.twig', array(
            'form'=>$formView,

        ));
    }


}