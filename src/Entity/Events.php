<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\EventsRepository;

#[ORM\Entity(repositoryClass: EventsRepository::class)]
class Events
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
  
    private ?int $idEvent = null;

    #[ORM\Column(type: "string", length: 15)]
    #[Assert\NotBlank]
   private  $titreevent;

    #[ORM\Column(type: "string", length: 15)]
    #[Assert\NotBlank]
    private $type;

    #[ORM\Column(type: "string", length: 15)]
    #[Assert\NotBlank]
    private string $date;

    #[ORM\Column(type: "string", length: 15)]
    #[Assert\NotBlank]
    private  $lieu;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private float $prix;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
   
    private ?int $nbMax = null;

    #[ORM\OneToMany(targetEntity: Sponsor::class, mappedBy: 'sponsor')]
    private Collection $sponsors;

    public function __construct()
    {
        $this->sponsors = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getTitreevent(): ?string
    {
        return $this->titreevent;
    }

    public function setTitreevent(string $titreevent): static
    {
        $this->titreevent = $titreevent;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbMax(): ?int
    {
        return $this->nbMax;
    }

    public function setNbMax(?int $nbMax): static
    {
        $this->nbMax = $nbMax;

        return $this;
    }

    /**
     * @return Collection|Sponsor[]
     */
    public function getSponsors(): Collection
    {
        return $this->sponsors;
    }

    public function addSponsor(Sponsor $sponsor): self
    {
        if (!$this->sponsors->contains($sponsor)) {
            $this->sponsors[] = $sponsor;
            $sponsor->setIdevenement($this);
        }
    
        return $this;
    }
    
    public function removeSponsor(Sponsor $sponsor): self
    {
        if ($this->sponsors->removeElement($sponsor)) {
            // set the owning side to null (unless already changed)
            if ($sponsor->getIdevenement() === $this) {
                $sponsor->setIdevenement(null);
            }
        }
    
        return $this;
    }
}
