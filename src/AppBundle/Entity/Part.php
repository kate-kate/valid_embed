<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Part
{

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"part_valid", "system_valid", "contract_valid"})
     */
    private $serialNumber;

    /**
     * @var string
     *
     * @Assert\Length(min=100, groups={"part_valid", "system_valid", "contract_valid"})
     */
    private $longString;

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

