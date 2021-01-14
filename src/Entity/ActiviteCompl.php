<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActiviteCompl
 *
 * @ORM\Table(name="activite_compl")
 * @ORM\Entity
 */
class ActiviteCompl
{
    /**
     * @var int
     *
     * @ORM\Column(name="AC_NUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $acNum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="AC_DATE", type="datetime", nullable=false)
     */
    private $acDate;

    /**
     * @var string
     *
     * @ORM\Column(name="AC_LIEU", type="string", length=25, nullable=false, options={"fixed"=true})
     */
    private $acLieu;

    /**
     * @var string
     *
     * @ORM\Column(name="AC_THEME", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $acTheme;

    /**
     * @var string
     *
     * @ORM\Column(name="AC_MODIF", type="string", length=50, nullable=false, options={"fixed"=true})
     */
    private $acModif;

    public function getAcNum(): ?int
    {
        return $this->acNum;
    }

    public function getAcDate(): ?\DateTimeInterface
    {
        return $this->acDate;
    }

    public function setAcDate(\DateTimeInterface $acDate): self
    {
        $this->acDate = $acDate;

        return $this;
    }

    public function getAcLieu(): ?string
    {
        return $this->acLieu;
    }

    public function setAcLieu(string $acLieu): self
    {
        $this->acLieu = $acLieu;

        return $this;
    }

    public function getAcTheme(): ?string
    {
        return $this->acTheme;
    }

    public function setAcTheme(string $acTheme): self
    {
        $this->acTheme = $acTheme;

        return $this;
    }

    public function getAcModif(): ?string
    {
        return $this->acModif;
    }

    public function setAcModif(string $acModif): self
    {
        $this->acModif = $acModif;

        return $this;
    }


}
