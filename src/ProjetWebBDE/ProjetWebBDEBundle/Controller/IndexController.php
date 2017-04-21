<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProjetWebBDE\ProjetWebBDEBundle\Form\Type\ContactType;
use ProjetWebBDE\ProjetWebBDEBundle\Entity\Enquiry;
use ProjetWebBDE\ProjetWebBDEBundle\Form\EnquiryType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormEvents;

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

    public function contactAction(Request $request)
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST') {
            
            if ($form->isValid() && $form->isSubmitted()) {

                $enquiry=$form->getdata();

                $message = \Swift_Message::newInstance()
                ->setSubject($enquiry->getSubject())
                ->setFrom($enquiry->getEmail())
                ->setTo($this->container->getParameter('projet_web_bde.emails.contact_email'))
                ->setBody($this->renderView('ProjetWebBDEBundle:Default:contact.txt.twig', array('enquiry' => $enquiry)));
            $this->get('mailer')->send($message);

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
            var_dump("test");
            return $this->redirectToRoute('contact');
        }
    }

    return $this->render('ProjetWebBDEBundle:Default:contact.html.twig', array(
        'form' => $form->createView()
    ));
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('BoutiqueBundle:Article')->findAll();
        $activites = $em->getRepository('ProjetWebBDEBundle:activite')->findAll();
        return $this->render('ProjetWebBDEBundle:Default:index.html.twig',array("articles"=> $articles, "activites"=> $activites));
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
        $em = $this->getDoctrine()->getManager();
        $activites = $em->getRepository('ProjetWebBDEBundle:activite')->findAll();
        return $this->render('ProjetWebBDEBundle:Activites:activite.html.twig',array("activites"=> $activites));
    }

    public function all_activiteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $activites = $em->getRepository('ProjetWebBDEBundle:activite')->findAll();
        return $this->render('ProjetWebBDEBundle:Activites:all_activite.html.twig',array("activites"=> $activites));    }

    public function ancienne_activiteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $activites = $em->getRepository('ProjetWebBDEBundle:activite')->findAll();
        return $this->render('ProjetWebBDEBundle:Activites:ancienne_activite.html.twig',array("activites"=> $activites));    }

    public function creation_activiteAction()
    {
        return $this->render('ProjetWebBDEBundle:Activites:creation_activite.html.twig');
    }

    public function nouvelle_activiteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $activites = $em->getRepository('ProjetWebBDEBundle:activite')->findAll();
        return $this->render('ProjetWebBDEBundle:Activites:nouvelle_activite.html.twig',array("activites"=> $activites));    }

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
