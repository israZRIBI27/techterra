<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProjectRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass : ProjectRepository::class )]
class Project
{
  
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


   
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le Titre ne peut pas être vide')]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s]+$/',
        message: 'Le title ne peut contenir que des lettres.'
    )]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Le title ne peut pas dépasser {{ limit }} caractères.'
    )] 
private ?string  $title = null;

#[ORM\Column(length: 255)]
#[Assert\NotBlank(message: 'Le description ne peut pas être vide')]
#[Assert\Regex(
    pattern: '/^[a-zA-ZÀ-ÿ\s]+$/',
    message: 'La description ne peut contenir que des lettres.'
)]
#[Assert\Length(
    max: 255,
    maxMessage: 'La description ne peut pas dépasser {{ limit }} caractères.'
)] 
private ?string  $description = null;

#[ORM\ManyToOne(inversedBy: 'projects')]
private ?Categories $Categories = null;





public function getId(): ?int
{
    return $this->id;
}


    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }
/*
    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }*/


public function getCategories(): ?Categories
{
    return $this->Categories;
}

public function setCategories(?Categories $Categories): static
{
    $this->Categories = $Categories;

    return $this;
}

}
