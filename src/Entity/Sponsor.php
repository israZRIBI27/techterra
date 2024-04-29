<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SponsorRepository;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ? int $id =null;

    #[ORM\Column(type: "string", length: 15)]
    #[Assert\NotBlank]
    private $nom;


    #[ORM\Column]
    #[Assert\Positive]
    private ?int $montant = null;


    #[ORM\ManyToOne(targetEntity: Events::class)]
    #[ORM\JoinColumn(name: "idevenement", referencedColumnName: "id_event")]
    private $idevenement;


 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getIdevenement(): ?Events
    {
        return $this->idevenement;
    }

    public function setIdevenement(?Events $idevenement): static
    {
        $this->idevenement = $idevenement;

        return $this;
    }


}
