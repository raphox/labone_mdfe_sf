<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdfeIdeRepository")
 */
class MdfeIde
{
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\City", cascade={"all"})
     * @ORM\JoinTable(name="mdfe_ide_loading_city")
     */
    private $loadingCities;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\City", cascade={"all"})
     * @ORM\OneToMany(targetEntity="MdfeIdeUnloadingCity", mappedBy="mdfe", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     */
    private $unloadingCities;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\State", cascade={"all"})
     * @ORM\JoinTable(name="mdfe_ide_routing_city")
     */
    private $routingStates;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cUF;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tpAmb;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tpEmit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tpTransp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mod;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $serie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nMDF;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cMDF;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cDV;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $modal;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dhEmi;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tpEmis;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $procEmi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $verProc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $UFIni;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $UFFim;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dhIniViagem;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $indCanalVerde;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $indCarregaPosterior;

    /**
     * @Doctrine\ORM\Mapping\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @Doctrine\ORM\Mapping\Column(type="datetime")
     */
    protected $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Company", inversedBy="mdfeIdes")
     */
    private $company;

    public function __construct()
    {
        $this->loadingCities = new ArrayCollection();
        $this->unloadingCities = new ArrayCollection();
        $this->routingStates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCUF(): ?string
    {
        return $this->cUF;
    }

    public function setCUF(?string $cUF): self
    {
        $this->cUF = $cUF;

        return $this;
    }

    public function getTpAmb(): ?int
    {
        return $this->tpAmb;
    }

    public function setTpAmb(?int $tpAmb): self
    {
        $this->tpAmb = $tpAmb;

        return $this;
    }

    public function getTpEmit(): ?int
    {
        return $this->tpEmit;
    }

    public function setTpEmit(?int $tpEmit): self
    {
        $this->tpEmit = $tpEmit;

        return $this;
    }

    public function getTpTransp(): ?string
    {
        return $this->tpTransp;
    }

    public function setTpTransp(?string $tpTransp): self
    {
        $this->tpTransp = $tpTransp;

        return $this;
    }

    public function getMod(): ?int
    {
        return $this->mod;
    }

    public function setMod(?int $mod): self
    {
        $this->mod = $mod;

        return $this;
    }

    public function getSerie(): ?int
    {
        return $this->serie;
    }

    public function setSerie(?int $serie): self
    {
        $this->serie = $serie;

        return $this;
    }

    public function getNMDF(): ?string
    {
        return $this->nMDF;
    }

    public function setNMDF(?string $nMDF): self
    {
        $this->nMDF = $nMDF;

        return $this;
    }

    public function getCMDF(): ?string
    {
        return $this->cMDF;
    }

    public function setCMDF(?string $cMDF): self
    {
        $this->cMDF = $cMDF;

        return $this;
    }

    public function getCDV(): ?int
    {
        return $this->cDV;
    }

    public function setCDV(?int $cDV): self
    {
        $this->cDV = $cDV;

        return $this;
    }

    public function getModal(): ?int
    {
        return $this->modal;
    }

    public function setModal(?int $modal): self
    {
        $this->modal = $modal;

        return $this;
    }

    public function getDhEmi(): ?\DateTimeInterface
    {
        return $this->dhEmi;
    }

    public function setDhEmi(\DateTimeInterface $dhEmi): self
    {
        $this->dhEmi = $dhEmi;

        return $this;
    }

    public function getTpEmis(): ?int
    {
        return $this->tpEmis;
    }

    public function setTpEmis(?int $tpEmis): self
    {
        $this->tpEmis = $tpEmis;

        return $this;
    }

    public function getProcEmi(): ?int
    {
        return $this->procEmi;
    }

    public function setProcEmi(?int $procEmi): self
    {
        $this->procEmi = $procEmi;

        return $this;
    }

    public function getVerProc(): ?string
    {
        return $this->verProc;
    }

    public function setVerProc(?string $verProc): self
    {
        $this->verProc = $verProc;

        return $this;
    }

    public function getUFIni(): ?string
    {
        return $this->UFIni;
    }

    public function setUFIni(?string $UFIni): self
    {
        $this->UFIni = $UFIni;

        return $this;
    }

    public function getUFFim(): ?string
    {
        return $this->UFFim;
    }

    public function setUFFim(?string $UFFim): self
    {
        $this->UFFim = $UFFim;

        return $this;
    }

    public function getDhIniViagem(): ?\DateTimeInterface
    {
        return $this->dhIniViagem;
    }

    public function setDhIniViagem(\DateTimeInterface $dhIniViagem): self
    {
        $this->dhIniViagem = $dhIniViagem;

        return $this;
    }

    public function getIndCanalVerde(): ?bool
    {
        return $this->indCanalVerde;
    }

    public function setIndCanalVerde(?bool $indCanalVerde): self
    {
        $this->indCanalVerde = $indCanalVerde;

        return $this;
    }

    public function getIndCarregaPosterior(): ?bool
    {
        return $this->indCarregaPosterior;
    }

    public function setIndCarregaPosterior(?bool $indCarregaPosterior): self
    {
        $this->indCarregaPosterior = $indCarregaPosterior;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
    */
    public function updatedTimestamps(): void
    {
        $this->setUpdatedAt(new \DateTime('now'));
        if ($this->getCreatedAt() === null) {
            $this->setCreatedAt(new \DateTime('now'));
        }
    }

    /**
     * @return Collection|MdfeIdeLoadingCity[]
     */
    public function getLoadingCities(): Collection
    {
        return $this->loadingCities;
    }

    public function addLoadingCity(MdfeIdeLoadingCity $loadingCity): self
    {
        if (!$this->loadingCities->contains($loadingCity)) {
            $this->loadingCities[] = $loadingCity;
            $loadingCity->addMdfe($this);
        }

        return $this;
    }

    public function removeLoadingCity(MdfeIdeLoadingCity $loadingCity): self
    {
        if ($this->loadingCities->contains($loadingCity)) {
            $this->loadingCities->removeElement($loadingCity);
            $loadingCity->removeMdfe($this);
        }

        return $this;
    }

    /**
     * @return Collection|MdfeIdeUnloadingCity[]
     */
    public function getUnloadingCities(): Collection
    {
        return $this->unloadingCities;
    }

    public function addUnloadingCity(MdfeIdeUnloadingCity $unloadingCity): self
    {
        if (!$this->unloadingCities->contains($unloadingCity)) {
            $this->unloadingCities[] = $unloadingCity;
            $unloadingCity->addMdfe($this);
        }

        return $this;
    }

    public function removeUnloadingCity(MdfeIdeUnloadingCity $unloadingCity): self
    {
        if ($this->unloadingCities->contains($unloadingCity)) {
            $this->unloadingCities->removeElement($unloadingCity);
            $unloadingCity->removeMdfe($this);
        }

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return Collection|State[]
     */
    public function getRoutingStates(): Collection
    {
        return $this->routingStates;
    }

    public function addRoutingState(State $routingState): self
    {
        if (!$this->routingStates->contains($routingState)) {
            $this->routingStates[] = $routingState;
        }

        return $this;
    }

    public function removeRoutingState(State $routingState): self
    {
        if ($this->routingStates->contains($routingState)) {
            $this->routingStates->removeElement($routingState);
        }

        return $this;
    }
}
