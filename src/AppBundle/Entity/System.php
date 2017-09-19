<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class System
{

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"system_valid", "contract_valid"})
     */
    private $serialNumber;

    /**
     * @var string
     *
     * @Assert\Length(min=100, groups={"system_valid", "contract_valid"})
     */
    private $longString;

    /**
     * @var Part[]|ArrayCollection
     *
     * @Assert\Valid(groups={"system_valid", "contract_valid"})
     */
    private $parts;

    public function __construct()
    {
        $this->parts = new ArrayCollection();
    }


    /**
     * @param string $serialNumber
     */
    public function setSerialNumber(?string $serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * Get serialNumber
     *
     * @return string
     */
    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }


    /**
     * @return Part[]|ArrayCollection
     */
    public function getParts(): ArrayCollection
    {
        return $this->parts;
    }

    /**
     * @param Part $part
     */
    public function addPart(Part $part)
    {
        $this->parts->add($part);
    }

    /**
     * @param Part $part
     */
    public function removePart(Part $part)
    {
        $this->parts->removeElement($part);
    }

    /**
     * @return string
     */
    public function getLongString(): ?string
    {
        return $this->longString;
    }

    /**
     * @param string $longString
     */
    public function setLongString(?string $longString)
    {
        $this->longString = $longString;
    }
}

