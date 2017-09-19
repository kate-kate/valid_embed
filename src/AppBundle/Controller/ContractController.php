<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contract;
use AppBundle\Entity\Part;
use AppBundle\Entity\System;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Contract controller.
 *
 * @Route("contract")
 */
class ContractController extends Controller
{
    /**
     * Creates a new contract entity.
     *
     * @Route("/", name="contract_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contract = new Contract();

        $system = new System();
        $system->addPart(new Part());
        $contract->addSystem($system);

        $form = $this->createForm('AppBundle\Form\ContractType', $contract);
        $form->handleRequest($request);

        return $this->render('contract/new.html.twig', array(
            'contract' => $contract,
            'form' => $form->createView(),
        ));
    }

}
