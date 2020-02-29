<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City
{
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\City", cascade={"all"})
     * @ORM\OneToMany(targetEntity="MdfeIdeUnloadingCity", mappedBy="city", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     */
    private $unloadingCities;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $uf;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ibge;

    public function __construct()
    {
        $this->unloadingCities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function setUf(?string $uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    public function getIbge(): ?int
    {
        return $this->ibge;
    }

    public function setIbge(?int $ibge): self
    {
        $this->ibge = $ibge;

        return $this;
    }

    public function __toString()
    {
        return $this->getName() . ' / ' . $this->getUf();
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
            $unloadingCity->setCity($this);
        }

        return $this;
    }

    public function removeUnloadingCity(MdfeIdeUnloadingCity $unloadingCity): self
    {
        if ($this->unloadingCities->contains($unloadingCity)) {
            $this->unloadingCities->removeElement($unloadingCity);
            // set the owning side to null (unless already changed)
            if ($unloadingCity->getCity() === $this) {
                $unloadingCity->setCity(null);
            }
        }

        return $this;
    }
}
