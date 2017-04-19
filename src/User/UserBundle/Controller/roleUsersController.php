<?php

namespace User\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class roleUsersController extends Controller
{
	public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }


    /**
     * @Route("/users/", name="list_users")
     */

    /**
	 * @param string $role
	 *
	 * @return array
	 */
    public function listUsersAction(){
	 
	   $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('UserBundle:Default:listUsers.html.twig', array(
            'users' => $users,
        ));
    }
}

