<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompanyRepository")
 */
class Company
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cnpj;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $xNome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $xFant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $xLgr;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $nro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $xBairro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cMun;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $cep;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $uf;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $fone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MdfeIde", mappedBy="company")
     */
    private $mdfeIdes;

    public function __construct()
    {
        $this->mdfeIdes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getIe(): ?string
    {
        return $this->ie;
    }

    public function setIe(string $ie): self
    {
        $this->ie = $ie;

        return $this;
    }

    public function getXNome(): ?string
    {
        return $this->xNome;
    }

    public function setXNome(string $xNome): self
    {
        $this->xNome = $xNome;

        return $this;
    }

    public function getXFant(): ?string
    {
        return $this->xFant;
    }

    public function setXFant(string $xFant): self
    {
        $this->xFant = $xFant;

        return $this;
    }

    public function getXLgr(): ?string
    {
        return $this->xLgr;
    }

    public function setXLgr(string $xLgr): self
    {
        $this->xLgr = $xLgr;

        return $this;
    }

    public function getNro(): ?string
    {
        return $this->nro;
    }

    public function setNro(string $nro): self
    {
        $this->nro = $nro;

        return $this;
    }

    public function getXBairro(): ?string
    {
        return $this->xBairro;
    }

    public function setXBairro(string $xBairro): self
    {
        $this->xBairro = $xBairro;

        return $this;
    }

    public function getCMun(): ?string
    {
        return $this->cMun;
    }

    public function setCMun(string $cMun): self
    {
        $this->cMun = $cMun;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function setUf(string $uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    public function getFone(): ?string
    {
        return $this->fone;
    }

    public function setFone(string $fone): self
    {
        $this->fone = $fone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection|MdfeIde[]
     */
    public function getMdfeIdes(): Collection
    {
        return $this->mdfeIdes;
    }

    public function addMdfeIde(MdfeIde $mdfeIde): self
    {
        if (!$this->mdfeIdes->contains($mdfeIde)) {
            $this->mdfeIdes[] = $mdfeIde;
            $mdfeIde->setCompany($this);
        }

        return $this;
    }

    public function removeMdfeIde(MdfeIde $mdfeIde): self
    {
        if ($this->mdfeIdes->contains($mdfeIde)) {
            $this->mdfeIdes->removeElement($mdfeIde);
            // set the owning side to null (unless already changed)
            if ($mdfeIde->getCompany() === $this) {
                $mdfeIde->setCompany(null);
            }
        }

        return $this;
    }
}
