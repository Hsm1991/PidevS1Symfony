<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"IdTicket")]
    private ?int $id = null;

    #[ORM\Column(name:"PrixTicket",nullable: true)]
    #[Assert\NotBlank(message: ('Ce Champ Doit Etre Rempli'))]
    #[Assert\Positive(message: "Le Prix De Ticket Doit Etre Positif")]
    private ?float $PrixTicket = null;


    #[ORM\Column(length: 20, nullable: true,name: "NomEvent")]
    private ?string $NomEvent = null;

    #[ORM\Column(length: 10, nullable: true,name: "TypeTicket")]
    private ?string $TypeTicket = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixTicket(): ?float
    {
        return $this->PrixTicket;
    }

    public function setPrixTicket(?float $PrixTicket): self
    {
        $this->PrixTicket = $PrixTicket;

        return $this;
    }

    public function getNomEvent(): ?string
    {
        return $this->NomEvent;
    }

    public function setNomEvent(?string $NomEvent): self
    {
        $this->NomEvent = $NomEvent;

        return $this;
    }

    public function getTypeTicket(): ?string
    {
        return $this->TypeTicket;
    }

    public function setTypeTicket(?string $TypeTicket): self
    {
        $this->TypeTicket = $TypeTicket;

        return $this;
    }
}
