<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Praticien
 *
 * @ORM\Table(name="praticien", indexes={@ORM\Index(name="TYP_CODE", columns={"TYP_CODE"})})
 * @ORM\Entity
 */
class Praticien
{
    /**
     * @var int
     *
     * @ORM\Column(name="PRA_NUM", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $praNum;

    /**
     * @var string
     *
     * @ORM\Column(name="PRA_NOM", type="string", length=25, nullable=false, options={"fixed"=true})
     */
    private $praNom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRA_PRENOM", type="string", length=30, nullable=false, options={"fixed"=true})
     */
    private $praPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRA_ADRESSE", type="string", length=50, nullable=false, options={"fixed"=true})
     */
    private $praAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="PRA_CP", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $praCp;

    /**
     * @var string
     *
     * @ORM\Column(name="PRA_VILLE", type="string", length=25, nullable=false, options={"fixed"=true})
     */
    private $praVille;

    /**
     * @var float
     *
     * @ORM\Column(name="PRA_COEFNOTORIETE", type="float", precision=10, scale=0, nullable=false)
     */
    private $praCoefnotoriete;

    /**
     * @var \TypePraticien
     *
     * @ORM\ManyToOne(targetEntity="TypePraticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TYP_CODE", referencedColumnName="TYP_CODE")
     * })
     */
    private $typCode;

    public function getPraNum(): ?int
    {
        return $this->praNum;
    }

    public function getPraNom(): ?string
    {
        return $this->praNom;
    }

    public function setPraNom(string $praNom): self
    {
        $this->praNom = $praNom;

        return $this;
    }

    public function getPraPrenom(): ?string
    {
        return $this->praPrenom;
    }

    public function setPraPrenom(string $praPrenom): self
    {
        $this->praPrenom = $praPrenom;

        return $this;
    }

    public function getPraAdresse(): ?string
    {
        return $this->praAdresse;
    }

    public function setPraAdresse(string $praAdresse): self
    {
        $this->praAdresse = $praAdresse;

        return $this;
    }

    public function getPraCp(): ?string
    {
        return $this->praCp;
    }

    public function setPraCp(string $praCp): self
    {
        $this->praCp = $praCp;

        return $this;
    }

    public function getPraVille(): ?string
    {
        return $this->praVille;
    }

    public function setPraVille(string $praVille): self
    {
        $this->praVille = $praVille;

        return $this;
    }

    public function getPraCoefnotoriete(): ?float
    {
        return $this->praCoefnotoriete;
    }

    public function setPraCoefnotoriete(float $praCoefnotoriete): self
    {
        $this->praCoefnotoriete = $praCoefnotoriete;

        return $this;
    }

    public function getTypCode(): ?TypePraticien
    {
        return $this->typCode;
    }

    public function setTypCode(?TypePraticien $typCode): self
    {
        $this->typCode = $typCode;

        return $this;
    }


}
