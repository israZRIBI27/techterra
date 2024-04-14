<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\NewsRepository;
use App\Entity\User;



#[ORM\Entity(repositoryClass: NewsRepository::class)]
class News
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(name: "id_news", type: "integer")]
    private ?int $idNews;

   #[ORM\Column(length: 255)]
    private ?string $title ;

    #[ORM\Column(length: 255)]
    private ?string $author;

    #[ORM\Column(length: 255)]
    private ?string $content ;

    #[ORM\Column(type: "datetime", nullable: false, options: ["default" => "CURRENT_TIMESTAMP"])]
    private $time ;

    #[ORM\Column]
    private ?int $reports = 0;

    #[ORM\Column]
    private ?int $views = 0;


   

    public function getIdNews(): ?int
    {
        return $this->idNews;
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

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): static
    {
        $this->author = $author;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getTime(): ?\DateTime
    {
        return $this->time;
    }
    
    public function setTime(?\DateTime $time): static
    {
        $this->time = $time;
    
        return $this;
    }
    
    

    public function getReports(): ?int
    {
        return $this->reports;
    }

    public function setReports(?int $reports): static
    {
        $this->reports = $reports;

        return $this;
    }

    public function getViews(): ?int
    {
        return $this->views;
    }

    public function setViews(int $views): static
    {
        $this->views = $views;

        return $this;
    }
    public function __toString()
    {
        return $this->title;
    
    }


}
