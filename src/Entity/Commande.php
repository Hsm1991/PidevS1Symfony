<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommandeRepository;
use FontLib\Table\Type\name;

#[ORM\Entity(repositoryClass: CommandeRepository::class )]
class Commande
{

    #[ORM\Id]
    #[ORM\Column(name:'idCmd')]
    private ?int  $idcmd = null;


    #[ORM\Column(name:'idPanier')]
    private ?int $idpanier = null;


    #[ORM\Id]
    #[ORM\Column(name:'idProd')]
    private ?int $idprod = null;

    #[ORM\Column(name:'nomProd')]
    private ?string $nomprod = null;

    #[ORM\Column(name:'quantite')]
    private ?int $quantite = null;

    #[ORM\Column(name:'prixProd')]
    private ?float $prixprod = null;

    #[ORM\Column(name:'prixRemise')]
    private ?float $prixremise = null;

    #[ORM\Column(length:255,name: 'etatCmd')]
    private ?string $etatcmd=null;

    #[ORM\Id]
    #[ORM\Column(length:255,name: 'dateCmd')]
    private ?string $datecmd=null;

    public function getIdcmd(): ?int
    {
        return $this->idcmd;
    }

    public function getIdpanier(): ?int
    {
        return $this->idpanier;
    }

    public function setIdpanier(int $idpanier): self
    {
        $this->idpanier = $idpanier;

        return $this;
    }

    public function getIdprod(): ?int
    {
        return $this->idprod;
    }

    public function getNomprod(): ?string
    {
        return $this->nomprod;
    }

    public function setNomprod(string $nomprod): self
    {
        $this->nomprod = $nomprod;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixprod(): ?float
    {
        return $this->prixprod;
    }

    public function setPrixprod(float $prixprod): self
    {
        $this->prixprod = $prixprod;

        return $this;
    }

    public function getPrixremise(): ?float
    {
        return $this->prixremise;
    }

    public function setPrixremise(float $prixremise): self
    {
        $this->prixremise = $prixremise;

        return $this;
    }

    public function getEtatcmd(): ?string
    {
        return $this->etatcmd;
    }

    public function setEtatcmd(string $etatcmd): self
    {
        $this->etatcmd = $etatcmd;

        return $this;
    }

    public function getDatecmd(): ?string
    {
        return $this->datecmd;
    }

    public function setIdcmd(string $idcmd): self
    {
        $this->idcmd = $idcmd;

        return $this;
    }

    public function setIdprod(string $idprod): self
    {
        $this->idprod = $idprod;

        return $this;
    }

    public function setDatecmd(string $datecmd): self
    {
        $this->datecmd = $datecmd;

        return $this;
    }




}
