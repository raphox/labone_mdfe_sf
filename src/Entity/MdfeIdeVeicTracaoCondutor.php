<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdfeIdeVeicTracaoCondutorRepository")
 */
class MdfeIdeVeicTracaoCondutor
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $xNome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cpf;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MdfeIdeVeicTracao", inversedBy="mdfeIdeVeicTracaoCondutors")
     */
    private $mdfe_ide_veic_tracao;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getXNome(): ?string
    {
        return $this->xNome;
    }

    public function setXNome(string $xNome): self
    {
        $this->xNome = $xNome;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getMdfeIdeVeicTracao(): ?MdfeIdeVeicTracao
    {
        return $this->mdfe_ide_veic_tracao;
    }

    public function setMdfeIdeVeicTracao(?MdfeIdeVeicTracao $mdfe_ide_veic_tracao): self
    {
        $this->mdfe_ide_veic_tracao = $mdfe_ide_veic_tracao;

        return $this;
    }
}
