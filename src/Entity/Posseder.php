<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posseder
 *
 * @ORM\Table(name="posseder", indexes={@ORM\Index(name="SPE_CODE", columns={"SPE_CODE"})})
 * @ORM\Entity
 */
class Posseder
{
    /**
     * @var string
     *
     * @ORM\Column(name="POS_DIPLOME", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $posDiplome;

    /**
     * @var float
     *
     * @ORM\Column(name="POS_COEFPRESCRIPTION", type="float", precision=10, scale=0, nullable=false)
     */
    private $posCoefprescription;

    /**
     * @var \Praticien
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Praticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PRA_NUM", referencedColumnName="PRA_NUM")
     * })
     */
    private $praNum;

    /**
     * @var \Specialite
     *
     * @ORM\ManyToOne(targetEntity="Specialite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SPE_CODE", referencedColumnName="SPE_CODE")
     * })
     */
    private $speCode;

    public function getPosDiplome(): ?string
    {
        return $this->posDiplome;
    }

    public function setPosDiplome(string $posDiplome): self
    {
        $this->posDiplome = $posDiplome;

        return $this;
    }

    public function getPosCoefprescription(): ?float
    {
        return $this->posCoefprescription;
    }

    public function setPosCoefprescription(float $posCoefprescription): self
    {
        $this->posCoefprescription = $posCoefprescription;

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

    public function getSpeCode(): ?Specialite
    {
        return $this->speCode;
    }

    public function setSpeCode(?Specialite $speCode): self
    {
        $this->speCode = $speCode;

        return $this;
    }


}
