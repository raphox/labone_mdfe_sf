<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdfeIdeDispRepository")
 */
class MdfeIdeDisp
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cnpjForn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cnpjPg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cpfPg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nCompra;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $vValePed;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MdfeIde", inversedBy="mdfeIdeDisps")
     */
    private $mdfe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCnpjForn(): ?string
    {
        return $this->cnpjForn;
    }

    public function setCnpjForn(?string $cnpjForn): self
    {
        $this->cnpjForn = $cnpjForn;

        return $this;
    }

    public function getCnpjPg(): ?string
    {
        return $this->cnpjPg;
    }

    public function setCnpjPg(?string $cnpjPg): self
    {
        $this->cnpjPg = $cnpjPg;

        return $this;
    }

    public function getCpfPg(): ?string
    {
        return $this->cpfPg;
    }

    public function setCpfPg(?string $cpfPg): self
    {
        $this->cpfPg = $cpfPg;

        return $this;
    }

    public function getNCompra(): ?string
    {
        return $this->nCompra;
    }

    public function setNCompra(?string $nCompra): self
    {
        $this->nCompra = $nCompra;

        return $this;
    }

    public function getVValePed(): ?float
    {
        return $this->vValePed;
    }

    public function setVValePed(?float $vValePed): self
    {
        $this->vValePed = $vValePed;

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
