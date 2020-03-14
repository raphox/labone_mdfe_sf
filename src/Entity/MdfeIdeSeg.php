<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdfeIdeSegRepository")
 */
class MdfeIdeSeg
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $respSeg;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $xSeg;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cnpj;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nApol;

    /**
     * @ORM\Column(type="array")
     */
    private $nAver = [];

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MdfeIde", inversedBy="mdfeIdeSegs")
     */
    private $mdfe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $respSegCnpj;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $respSegCpf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRespSeg(): ?string
    {
        return $this->respSeg;
    }

    public function setRespSeg(string $respSeg): self
    {
        $this->respSeg = $respSeg;

        return $this;
    }

    public function getXSeg(): ?string
    {
        return $this->xSeg;
    }

    public function setXSeg(string $xSeg): self
    {
        $this->xSeg = $xSeg;

        return $this;
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

    public function getNApol(): ?string
    {
        return $this->nApol;
    }

    public function setNApol(string $nApol): self
    {
        $this->nApol = $nApol;

        return $this;
    }

    public function getNAver(): ?array
    {
        return $this->nAver;
    }

    public function setNAver(array $nAver): self
    {
        $this->nAver = $nAver;

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

    public function getRespSegCnpj(): ?string
    {
        return $this->respSegCnpj;
    }

    public function setRespSegCnpj(string $respSegCnpj): self
    {
        $this->respSegCnpj = $respSegCnpj;

        return $this;
    }

    public function getRespSegCpf(): ?string
    {
        return $this->respSegCpf;
    }

    public function setRespSegCpf(string $respSegCpf): self
    {
        $this->respSegCpf = $respSegCpf;

        return $this;
    }
}
