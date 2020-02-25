<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdfeIdeUnloadingCityRepository")
 */
class MdfeIdeUnloadingCity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MdfeIde", inversedBy="unloadingCities")
     */
    private $mdfe;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="unloadingCities")
     */
    private $city;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MdfeIdeUnloadingCityDocument", mappedBy="mdfe_ide_unloading_city")
     */
    private $mdfeIdeUnloadingCityDocuments;

    public function __construct()
    {
        $this->mdfeIdeUnloadingCityDocuments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Collection|MdfeIdeUnloadingCityDocument[]
     */
    public function getMdfeIdeUnloadingCityDocuments(): Collection
    {
        return $this->mdfeIdeUnloadingCityDocuments;
    }

    public function addMdfeIdeUnloadingCityDocument(MdfeIdeUnloadingCityDocument $mdfeIdeUnloadingCityDocument): self
    {
        if (!$this->mdfeIdeUnloadingCityDocuments->contains($mdfeIdeUnloadingCityDocument)) {
            $this->mdfeIdeUnloadingCityDocuments[] = $mdfeIdeUnloadingCityDocument;
            $mdfeIdeUnloadingCityDocument->setMdfeIdeUnloadingCity($this);
        }

        return $this;
    }

    public function removeMdfeIdeUnloadingCityDocument(MdfeIdeUnloadingCityDocument $mdfeIdeUnloadingCityDocument): self
    {
        if ($this->mdfeIdeUnloadingCityDocuments->contains($mdfeIdeUnloadingCityDocument)) {
            $this->mdfeIdeUnloadingCityDocuments->removeElement($mdfeIdeUnloadingCityDocument);
            // set the owning side to null (unless already changed)
            if ($mdfeIdeUnloadingCityDocument->getMdfeIdeUnloadingCity() === $this) {
                $mdfeIdeUnloadingCityDocument->setMdfeIdeUnloadingCity(null);
            }
        }

        return $this;
    }
}
