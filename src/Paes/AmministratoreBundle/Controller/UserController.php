<?php

namespace Paes\AmministratoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/user/new/")
     * @Template()
     */
    public function newAction(Request $request)
    {

        $form = $this->createForm('amministratore_user_type');
        $form->handleRequest($request);

        return array("user_form" => $form->createView());
    }



}
