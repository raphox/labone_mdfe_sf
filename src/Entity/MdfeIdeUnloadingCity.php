<?php

namespace App\Entity;

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
}
