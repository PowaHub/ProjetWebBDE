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

    public function editUsersBDEAction($id)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));

        $user-> addRole('ROLE_BDE');
        $user-> removeRole('ROLE_CESI');
        $user-> removeRole('ROLE_ETUDIANT');
        $userManager->updateUser($user); // Pas besoin de faire un flush avec l'EntityManager, cette méthode le fait toute seule !
        
        
        return $this->redirectToRoute("user_role");
    }

    public function editUsersCESIAction($id)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));

        $user-> addRole('ROLE_CESI');
        $user-> removeRole('ROLE_BDE');
        $user-> removeRole('ROLE_ETUDIANT');
        $userManager->updateUser($user); // Pas besoin de faire un flush avec l'EntityManager, cette méthode le fait toute seule !
        
        
        return $this->redirectToRoute("user_role");
    }

    public function editUsersETUDIANTAction($id)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));

        $user-> addRole('ROLE_ETUDIANT');
        $user-> removeRole('ROLE_CESI');
        $user-> removeRole('ROLE_BDE');
        $userManager->updateUser($user); // Pas besoin de faire un flush avec l'EntityManager, cette méthode le fait toute seule !
        
        
        return $this->redirectToRoute("user_role");
    }

}
