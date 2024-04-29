<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategoriesRepository;

#[ORM\Entity(repositoryClass : CategoriesRepository::class )]

class Categories
{ 
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom ne peut pas être vide')]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s]+$/',
        message: 'Le nom ne peut contenir que des lettres.'
    )]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'
    )] 
    private ?string  $name = null;
    
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

    #[ORM\OneToMany(mappedBy: 'categories', targetEntity: Project::class)]
    private Collection $projects;
    

    public function __construct()
    {
        $this->projects = new ArrayCollection();
    }
   
    public function getId(): ?int
    {
        return $this->id;
    }


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

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

      /**
     * @return Collection<int, Project>
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    public function addProject(Project $project): static
    {
        if (!$this->projects->contains($project)) {
            $this->projects->add($project);
            $project->setCategories($this);
        }

        return $this;
    }

    public function removeProject(Project $project): static
    {
        if ($this->projects->removeElement($project)) {
            // set the owning side to null (unless already changed)
            if ($project->getCategories() === $this) {
                $project->setCategories(null);
            }
        }

        return $this;
    }

}
