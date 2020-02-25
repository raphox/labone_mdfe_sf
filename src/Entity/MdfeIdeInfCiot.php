<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdfeIdeInfCiotRepository")
 */
class MdfeIdeInfCiot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ciot;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cpf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cnpj;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MdfeIde", inversedBy="mdfeIdeInfCiots")
     */
    private $mdfe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCiot(): ?string
    {
        return $this->ciot;
    }

    public function setCiot(?string $ciot): self
    {
        $this->ciot = $ciot;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(?string $cnpj): self
    {
        $this->cnpj = $cnpj;

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
