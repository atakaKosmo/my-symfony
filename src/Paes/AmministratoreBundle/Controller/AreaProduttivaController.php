<?php

namespace Paes\AmministratoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class AreaProduttivaController extends Controller
{

    /**
     * @Route("/areaproduttiva/new/")
     * @Template()
     */
    public function newAction(Request $request)
    {

        $form = $this->createForm('amministratore_areaproduttiva_type');
        $form->handleRequest($request);

        return array("area_produttiva_form" => $form->createView());
    }


}
