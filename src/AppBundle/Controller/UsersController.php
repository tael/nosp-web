<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    /**
     * @Route("users")
     */
    public function getIndexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        return $this->render('users/index.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("users/{user}")
     */
    public function getShowAction(User $user)
    {
        return $this->render('users/show.html.twig', [
            'user' => $user
        ]);
    }

}