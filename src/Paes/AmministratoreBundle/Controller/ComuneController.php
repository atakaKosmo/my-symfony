<?php

namespace Paes\AmministratoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class ComuneController extends Controller
{

    /**
     * @Route("/comune/new/")
     * @Template()
     */
    public function newAction(Request $request)
    {

        $form = $this->createForm('amministratore_comune_type');
        $form->handleRequest($request);

        return array("comune_form" => $form->createView());
    }


}
