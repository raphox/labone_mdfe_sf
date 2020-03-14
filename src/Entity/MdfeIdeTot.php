<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdfeIdeTotRepository")
 */
class MdfeIdeTot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $qCTe;

    /**
     * @ORM\Column(type="integer")
     */
    private $qNFe;

    /**
     * @ORM\Column(type="integer")
     */
    private $qMDFe;

    /**
     * @ORM\Column(type="float")
     */
    private $vCarga;

    /**
     * @ORM\Column(type="integer")
     */
    private $cUnid;

    /**
     * @ORM\Column(type="float")
     */
    private $qCarga;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MdfeIde", inversedBy="mdfeIdeTots")
     */
    private $mdfe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQCTe(): ?int
    {
        return $this->qCTe;
    }

    public function setQCTe(int $qCTe): self
    {
        $this->qCTe = $qCTe;

        return $this;
    }

    public function getQNFe(): ?int
    {
        return $this->qNFe;
    }

    public function setQNFe(int $qNFe): self
    {
        $this->qNFe = $qNFe;

        return $this;
    }

    public function getQMDFe(): ?int
    {
        return $this->qMDFe;
    }

    public function setQMDFe(int $qMDFe): self
    {
        $this->qMDFe = $qMDFe;

        return $this;
    }

    public function getVCarga(): ?float
    {
        return $this->vCarga;
    }

    public function setVCarga(float $vCarga): self
    {
        $this->vCarga = $vCarga;

        return $this;
    }

    public function getCUnid(): ?int
    {
        return $this->cUnid;
    }

    public function setCUnid(int $cUnid): self
    {
        $this->cUnid = $cUnid;

        return $this;
    }

    public function getQCarga(): ?float
    {
        return $this->qCarga;
    }

    public function setQCarga(float $qCarga): self
    {
        $this->qCarga = $qCarga;

        return $this;
    }

    public function getMdfe(): ?MdfeIde
    {
        return $this->mdfe;
    }

    public function setMdfe(?MdfeIde $mdfe): self
    {
        $this->mdfe = $mdfe;

        return $this;
    }
}
