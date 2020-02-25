<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdfeIdeUnloadingCityDocumentRepository")
 */
class MdfeIdeUnloadingCityDocument
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MdfeIdeUnloadingCity", inversedBy="mdfeIdeUnloadingCityDocuments")
     */
    private $mdfe_ide_unloading_city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chNFe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SegCodBarra;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $indReentrega;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nItem;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMdfeIdeUnloadingCity(): ?MdfeIdeUnloadingCity
    {
        return $this->mdfe_ide_unloading_city;
    }

    public function setMdfeIdeUnloadingCity(?MdfeIdeUnloadingCity $mdfe_ide_unloading_city): self
    {
        $this->mdfe_ide_unloading_city = $mdfe_ide_unloading_city;

        return $this;
    }

    public function getChNFe(): ?string
    {
        return $this->chNFe;
    }

    public function setChNFe(?string $chNFe): self
    {
        $this->chNFe = $chNFe;

        return $this;
    }

    public function getSegCodBarra(): ?string
    {
        return $this->SegCodBarra;
    }

    public function setSegCodBarra(?string $SegCodBarra): self
    {
        $this->SegCodBarra = $SegCodBarra;

        return $this;
    }

    public function getIndReentrega(): ?bool
    {
        return $this->indReentrega;
    }

    public function setIndReentrega(?bool $indReentrega): self
    {
        $this->indReentrega = $indReentrega;

        return $this;
    }

    public function getNItem(): ?int
    {
        return $this->nItem;
    }

    public function setNItem(?int $nItem): self
    {
        $this->nItem = $nItem;

        return $this;
    }
}
