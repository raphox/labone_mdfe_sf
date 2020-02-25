<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdfeIdeVeicTracaoRepository")
 */
class MdfeIdeVeicTracao
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $cInt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $placa;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tara;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $capKG;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tpCar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $uf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $propCpf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $propCnpj;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $propRntrc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $propXNome;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $propIe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $propUf;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tpProp;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MdfeIde", inversedBy="mdfeIdeVeicTracaos")
     */
    private $mdfe;

    public function getCInt(): ?string
    {
        return $this->cInt;
    }

    public function setCInt(?string $cInt): self
    {
        $this->cInt = $cInt;

        return $this;
    }

    public function getPlaca(): ?string
    {
        return $this->placa;
    }

    public function setPlaca(?string $placa): self
    {
        $this->placa = $placa;

        return $this;
    }

    public function getTara(): ?string
    {
        return $this->tara;
    }

    public function setTara(?string $tara): self
    {
        $this->tara = $tara;

        return $this;
    }

    public function getCapKG(): ?string
    {
        return $this->capKG;
    }

    public function setCapKG(?string $capKG): self
    {
        $this->capKG = $capKG;

        return $this;
    }

    public function getTpCar(): ?string
    {
        return $this->tpCar;
    }

    public function setTpCar(?string $tpCar): self
    {
        $this->tpCar = $tpCar;

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

    public function getPropCpf(): ?string
    {
        return $this->propCpf;
    }

    public function setPropCpf(?string $propCpf): self
    {
        $this->propCpf = $propCpf;

        return $this;
    }

    public function getPropCnpj(): ?string
    {
        return $this->propCnpj;
    }

    public function setPropCnpj(?string $propCnpj): self
    {
        $this->propCnpj = $propCnpj;

        return $this;
    }

    public function getPropRntrc(): ?string
    {
        return $this->propRntrc;
    }

    public function setPropRntrc(?string $propRntrc): self
    {
        $this->propRntrc = $propRntrc;

        return $this;
    }

    public function getPropXNome(): ?string
    {
        return $this->propXNome;
    }

    public function setPropXNome(?string $PropXNome): self
    {
        $this->PropXNome = $PropXNome;

        return $this;
    }

    public function getPropIe(): ?string
    {
        return $this->propIe;
    }

    public function setPropIe(?string $propIe): self
    {
        $this->propIe = $propIe;

        return $this;
    }

    public function getPropUf(): ?string
    {
        return $this->propUf;
    }

    public function setPropUf(?string $propUf): self
    {
        $this->propUf = $propUf;

        return $this;
    }

    public function getTpProp(): ?int
    {
        return $this->tpProp;
    }

    public function setTpProp(?int $tpProp): self
    {
        $this->tpProp = $tpProp;

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
