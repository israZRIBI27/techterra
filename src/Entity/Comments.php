<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommentsRepository;
use App\Repository\UserRepository;
use App\Repository\NewsRepository;
use App\Entity\User;
use App\Entity\News;
use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity(repositoryClass: CommentsRepository::class)]
class Comments
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(name: "comment_id", type: "integer")]
    private $commentId;
  

    #[ORM\Column(type: "text")]
    private ?string $content = null;
  

    #[ORM\Column(type: "datetime", nullable: true, options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTime $time = null;

    #[ORM\ManyToOne(targetEntity: News::class)]
#[ORM\JoinColumn(name: "news_id", referencedColumnName: "id_news")]
private ?News $news;

#[ORM\ManyToOne(targetEntity: User::class)]
#[ORM\JoinColumn(name: "user_id", referencedColumnName: "user_id")]
private ?User $user;


    public function getCommentId(): ?int
    {
        return $this->commentId;
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

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): static
    {
        $this->time = $time;

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

   /* public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    /**
     * @return Collection<int, Comments>
     
    public function getComment(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): static
    {
        if (!$this->comment->contains($comment)) {
            $this->comment->add($comment);
            $comment->setNews($this);
        }

        return $this;
    }
*/
}
