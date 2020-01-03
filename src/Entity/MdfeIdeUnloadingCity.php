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
     * @ORM\ManyToMany(targetEntity="App\Entity\MdfeIde", mappedBy="unloadingCities", cascade={"all"})
     * @ORM\JoinTable(name="mdfe_ide_loading_city")
     */
    private $mdfe;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="loadingCities")
     */
    private $city;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function __construct()
    {
        $this->mdfe = new ArrayCollection();
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

    public function addMdfe(MdfeIde $mdfe): self
    {
        if (!$this->mdfe->contains($mdfe)) {
            $this->mdfe[] = $mdfe;
            $mdfe->addUnloadingCity($this);
        }

        return $this;
    }

    public function removeMdfe(MdfeIde $mdfe): self
    {
        if ($this->mdfe->contains($mdfe)) {
            $this->mdfe->removeElement($mdfe);
            $mdfe->removeUnloadingCity($this);
        }

        return $this;
    }
}
