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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rntrc;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MdfeIdeInfCiot", mappedBy="mdfe")
     */
    private $mdfeIdeInfCiots;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MdfeIdeDisp", mappedBy="mdfe")
     */
    private $mdfeIdeDisps;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MdfeIdeVeicReboque", mappedBy="mdfe")
     */
    private $mdfeIdeVeicReboques;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MdfeIdeVeicTracao", mappedBy="mdfe")
     */
    private $mdfeIdeVeicTracaos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MdfeIdeInfContratante", mappedBy="mdfe")
     */
    private $mdfeIdeInfContratantes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MdfeIdeSeg", mappedBy="mdfe")
     */
    private $mdfeIdeSegs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MdfeIdeTot", mappedBy="mdfe")
     */
    private $mdfeIdeTots;

    public function __construct()
    {
        $this->loadingCities = new ArrayCollection();
        $this->unloadingCities = new ArrayCollection();
        $this->routingStates = new ArrayCollection();
        $this->mdfeIdeInfCiots = new ArrayCollection();
        $this->mdfeIdeDisps = new ArrayCollection();
        $this->mdfeIdeVeicReboques = new ArrayCollection();
        $this->mdfeIdeVeicTracaos = new ArrayCollection();
        $this->mdfeIdeInfContratantes = new ArrayCollection();
        $this->mdfeIdeSegs = new ArrayCollection();
        $this->mdfeIdeTots = new ArrayCollection();
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

    public function getRntrc(): ?string
    {
        return $this->rntrc;
    }

    public function setRntrc(?string $rntrc): self
    {
        $this->rntrc = $rntrc;

        return $this;
    }

    /**
     * @return Collection|MdfeIdeInfCiot[]
     */
    public function getMdfeIdeInfCiots(): Collection
    {
        return $this->mdfeIdeInfCiots;
    }

    public function addMdfeIdeInfCiot(MdfeIdeInfCiot $mdfeIdeInfCiot): self
    {
        if (!$this->mdfeIdeInfCiots->contains($mdfeIdeInfCiot)) {
            $this->mdfeIdeInfCiots[] = $mdfeIdeInfCiot;
            $mdfeIdeInfCiot->setMdfe($this);
        }

        return $this;
    }

    public function removeMdfeIdeInfCiot(MdfeIdeInfCiot $mdfeIdeInfCiot): self
    {
        if ($this->mdfeIdeInfCiots->contains($mdfeIdeInfCiot)) {
            $this->mdfeIdeInfCiots->removeElement($mdfeIdeInfCiot);
            // set the owning side to null (unless already changed)
            if ($mdfeIdeInfCiot->getMdfe() === $this) {
                $mdfeIdeInfCiot->setMdfe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MdfeIdeDisp[]
     */
    public function getMdfeIdeDisps(): Collection
    {
        return $this->mdfeIdeDisps;
    }

    public function addMdfeIdeDisp(MdfeIdeDisp $mdfeIdeDisp): self
    {
        if (!$this->mdfeIdeDisps->contains($mdfeIdeDisp)) {
            $this->mdfeIdeDisps[] = $mdfeIdeDisp;
            $mdfeIdeDisp->setMdfe($this);
        }

        return $this;
    }

    public function removeMdfeIdeDisp(MdfeIdeDisp $mdfeIdeDisp): self
    {
        if ($this->mdfeIdeDisps->contains($mdfeIdeDisp)) {
            $this->mdfeIdeDisps->removeElement($mdfeIdeDisp);
            // set the owning side to null (unless already changed)
            if ($mdfeIdeDisp->getMdfe() === $this) {
                $mdfeIdeDisp->setMdfe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MdfeIdeVeicReboque[]
     */
    public function getMdfeIdeVeicReboques(): Collection
    {
        return $this->mdfeIdeVeicReboques;
    }

    public function addMdfeIdeVeicReboque(MdfeIdeVeicReboque $mdfeIdeVeicReboque): self
    {
        if (!$this->mdfeIdeVeicReboques->contains($mdfeIdeVeicReboque)) {
            $this->mdfeIdeVeicReboques[] = $mdfeIdeVeicReboque;
            $mdfeIdeVeicReboque->setMdfe($this);
        }

        return $this;
    }

    public function removeMdfeIdeVeicReboque(MdfeIdeVeicReboque $mdfeIdeVeicReboque): self
    {
        if ($this->mdfeIdeVeicReboques->contains($mdfeIdeVeicReboque)) {
            $this->mdfeIdeVeicReboques->removeElement($mdfeIdeVeicReboque);
            // set the owning side to null (unless already changed)
            if ($mdfeIdeVeicReboque->getMdfe() === $this) {
                $mdfeIdeVeicReboque->setMdfe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MdfeIdeVeicTracao[]
     */
    public function getMdfeIdeVeicTracaos(): Collection
    {
        return $this->mdfeIdeVeicTracaos;
    }

    public function addMdfeIdeVeicTracao(MdfeIdeVeicTracao $mdfeIdeVeicTracao): self
    {
        if (!$this->mdfeIdeVeicTracaos->contains($mdfeIdeVeicTracao)) {
            $this->mdfeIdeVeicTracaos[] = $mdfeIdeVeicTracao;
            $mdfeIdeVeicTracao->setMdfe($this);
        }

        return $this;
    }

    public function removeMdfeIdeVeicTracao(MdfeIdeVeicTracao $mdfeIdeVeicTracao): self
    {
        if ($this->mdfeIdeVeicTracaos->contains($mdfeIdeVeicTracao)) {
            $this->mdfeIdeVeicTracaos->removeElement($mdfeIdeVeicTracao);
            // set the owning side to null (unless already changed)
            if ($mdfeIdeVeicTracao->getMdfe() === $this) {
                $mdfeIdeVeicTracao->setMdfe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MdfeIdeInfContratante[]
     */
    public function getMdfeIdeInfContratantes(): Collection
    {
        return $this->mdfeIdeInfContratantes;
    }

    public function addMdfeIdeInfContratante(MdfeIdeInfContratante $mdfeIdeInfContratante): self
    {
        if (!$this->mdfeIdeInfContratantes->contains($mdfeIdeInfContratante)) {
            $this->mdfeIdeInfContratantes[] = $mdfeIdeInfContratante;
            $mdfeIdeInfContratante->setMdfe($this);
        }

        return $this;
    }

    public function removeMdfeIdeInfContratante(MdfeIdeInfContratante $mdfeIdeInfContratante): self
    {
        if ($this->mdfeIdeInfContratantes->contains($mdfeIdeInfContratante)) {
            $this->mdfeIdeInfContratantes->removeElement($mdfeIdeInfContratante);
            // set the owning side to null (unless already changed)
            if ($mdfeIdeInfContratante->getMdfe() === $this) {
                $mdfeIdeInfContratante->setMdfe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MdfeIdeSeg[]
     */
    public function getMdfeIdeSegs(): Collection
    {
        return $this->mdfeIdeSegs;
    }

    public function addMdfeIdeSeg(MdfeIdeSeg $mdfeIdeSeg): self
    {
        if (!$this->mdfeIdeSegs->contains($mdfeIdeSeg)) {
            $this->mdfeIdeSegs[] = $mdfeIdeSeg;
            $mdfeIdeSeg->setMdfe($this);
        }

        return $this;
    }

    public function removeMdfeIdeSeg(MdfeIdeSeg $mdfeIdeSeg): self
    {
        if ($this->mdfeIdeSegs->contains($mdfeIdeSeg)) {
            $this->mdfeIdeSegs->removeElement($mdfeIdeSeg);
            // set the owning side to null (unless already changed)
            if ($mdfeIdeSeg->getMdfe() === $this) {
                $mdfeIdeSeg->setMdfe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MdfeIdeTot[]
     */
    public function getMdfeIdeTots(): Collection
    {
        return $this->mdfeIdeTots;
    }

    public function addMdfeIdeTot(MdfeIdeTot $mdfeIdeTot): self
    {
        if (!$this->mdfeIdeTots->contains($mdfeIdeTot)) {
            $this->mdfeIdeTots[] = $mdfeIdeTot;
            $mdfeIdeTot->setMdfe($this);
        }

        return $this;
    }

    public function removeMdfeIdeTot(MdfeIdeTot $mdfeIdeTot): self
    {
        if ($this->mdfeIdeTots->contains($mdfeIdeTot)) {
            $this->mdfeIdeTots->removeElement($mdfeIdeTot);
            // set the owning side to null (unless already changed)
            if ($mdfeIdeTot->getMdfe() === $this) {
                $mdfeIdeTot->setMdfe(null);
            }
        }

        return $this;
    }
}
