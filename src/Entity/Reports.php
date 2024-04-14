<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReportsRepository; 
use App\Entity\User;
use App\Entity\News;

#[ORM\Entity(repositoryClass: ReportsRepository::class)]
class Reports
{
 
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(length: 255)]
    private ?String $reportStatus = null;
 

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "userid", referencedColumnName: "user_id")]
    private int $user;


    #[ORM\ManyToOne(targetEntity: News::class)]
    #[ORM\JoinColumn(name: "newsid", referencedColumnName: "id_news")]
    private int $newsId;

    public function getReportStatus(): ?string
    {
        return $this->reportStatus;
    }

    public function setReportStatus(string $reportStatus): static
    {
        $this->reportStatus = $reportStatus;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getNews(): ?News
    {
        return $this->news;
    }

    public function setNews(?News $news): static
    {
        $this->news = $news;

        return $this;
    }

    public function getNewsId(): ?News
    {
        return $this->newsId;
    }

    public function setNewsId(?News $newsId): static
    {
        $this->newsId = $newsId;

        return $this;
    }


}
