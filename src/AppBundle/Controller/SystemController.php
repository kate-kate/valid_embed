<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Part;
use AppBundle\Entity\System;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * System controller.
 *
 * @Route("system")
 */
class SystemController extends Controller
{
    /**
     * Creates a new system entity.
     *
     * @Route("/", name="system_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $system = new System();

        $system->addPart(new Part());

        $form = $this->createForm('AppBundle\Form\SystemType', $system);
        $form->handleRequest($request);

        return $this->render('system/new.html.twig', array(
            'system' => $system,
            'form' => $form->createView(),
        ));
    }

}
