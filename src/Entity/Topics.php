<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TopicsRepository;
#[ORM\Entity(repositoryClass: TopicsRepository::class)]

class Topics
{
    #[ORM\Column(type: "integer")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private int $categoryId;

    #[ORM\Column(type: "string", length: 255)]
    private string $categoryName;


    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    public function setCategoryName(string $categoryName): static
    {
        $this->categoryName = $categoryName;

        return $this;
    }
    public function __toString()
    {
        return $this->categoryName;
    }
}
