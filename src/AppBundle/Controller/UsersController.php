<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/users")
 */
class UsersController extends Controller
{
    /**
     * @Route("")
     */
    public function getIndexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        return $this->render('users/index.html.twig', [
            'users' => $users
        ]);
    }

}