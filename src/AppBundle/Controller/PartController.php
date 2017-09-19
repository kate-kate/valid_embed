<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Part;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Part controller.
 *
 * @Route("part")
 */
class PartController extends Controller
{

    /**
     * Creates a new part entity.
     *
     * @Route("/", name="part_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $part = new Part();
        $form = $this->createForm('AppBundle\Form\PartType', $part);
        $form->handleRequest($request);

        return $this->render('part/new.html.twig', array(
            'part' => $part,
            'form' => $form->createView(),
        ));
    }

}
