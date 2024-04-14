<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reports
 *
 * @ORM\Table(name="reports", indexes={@ORM\Index(name="fk_user", columns={"user_id"}), @ORM\Index(name="fk_news", columns={"news_id"})})
 * @ORM\Entity
 */
class Reports
{
    /**
     * @var string
     *
     * @ORM\Column(name="report_status", type="string", length=11, nullable=false)
     */
    private $reportStatus;

    /**
     * @var \News
     *
     * @ORM\ManyToOne(targetEntity="News")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="news_id", referencedColumnName="id_news")
     * })
     */
    private $news;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getReportStatus(): ?string
    {
        return $this->reportStatus;
    }

    public function setReportStatus(string $reportStatus): static
    {
        $this->reportStatus = $reportStatus;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }


}
