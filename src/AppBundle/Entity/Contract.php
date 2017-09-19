<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class Contract
{

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"contract_valid"})
     */
    private $name;


    /**
     * @var System[]|ArrayCollection
     *
     * @Assert\Valid(groups={"contract_valid"})
     */
    private $systems;

    public function __construct()
    {
        $this->systems = new ArrayCollection();
    }


    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return System[]|ArrayCollection
     */
    public function getSystems(): ArrayCollection
    {
        return $this->systems;
    }

    /**
     * @param System $system
     */
    public function addSystem(System $system)
    {
        $this->systems->add($system);
    }

    /**
     * @param System $system
     */
    public function removeSystem(System $system) {
        $this->systems->removeElement($system);
    }

}

