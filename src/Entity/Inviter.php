<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inviter
 *
 * @ORM\Table(name="inviter", indexes={@ORM\Index(name="PRA_NUM", columns={"PRA_NUM"})})
 * @ORM\Entity
 */
class Inviter
{
    /**
     * @var bool
     *
     * @ORM\Column(name="SPECIALISTEON", type="boolean", nullable=false)
     */
    private $specialisteon;

    /**
     * @var \ActiviteCompl
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ActiviteCompl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AC_NUM", referencedColumnName="AC_NUM")
     * })
     */
    private $acNum;

    /**
     * @var \Praticien
     *
     * @ORM\ManyToOne(targetEntity="Praticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PRA_NUM", referencedColumnName="PRA_NUM")
     * })
     */
    private $praNum;

    public function getSpecialisteon(): ?bool
    {
        return $this->specialisteon;
    }

    public function setSpecialisteon(bool $specialisteon): self
    {
        $this->specialisteon = $specialisteon;

        return $this;
    }

    public function getAcNum(): ?ActiviteCompl
    {
        return $this->acNum;
    }

    public function setAcNum(?ActiviteCompl $acNum): self
    {
        $this->acNum = $acNum;

        return $this;
    }

    public function getPraNum(): ?Praticien
    {
        return $this->praNum;
    }

    public function setPraNum(?Praticien $praNum): self
    {
        $this->praNum = $praNum;

        return $this;
    }


}
