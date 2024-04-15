<?php

namespace App\Entity;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\RepliesRepository;
use App\Entity\Threads; // Import the Threads entity
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: RepliesRepository::class)]
class Replies
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(name: "reply_id", type: "integer")]
    private $replyId;

    #[ORM\Column(type: "text", length: 65535)]
    private string $content;

    #[ORM\Column(type: "datetime")]
    private $createdAt;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(referencedColumnName: "user_id")]
    private $user;

    #[ORM\ManyToOne(targetEntity: Threads::class, inversedBy: "replies")]
    #[ORM\JoinColumn(name: "threads_id", referencedColumnName: "thread_id", nullable: false)]
    private $threads;



    public function getReplyId(): ?int
    {
        return $this->replyId;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

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

    public function getThreads(): ?Threads
    {
        return $this->threads;
    }

    public function setThreads(?Threads $threads): static
    {
        $this->threads = $threads;

        return $this;
    }




}
