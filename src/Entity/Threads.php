<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ThreadsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\User; // Add this line to import the User entity

#[ORM\Entity(repositoryClass: ThreadsRepository::class)]
class Threads
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(name: "thread_id", type: "integer")]
    private ?int $threadId;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "threads")]
    #[ORM\JoinColumn(referencedColumnName: "user_id")]
    private $user;

    #[ORM\Column(type: "string", length: 80, nullable: false)]
    private $title;

    #[ORM\Column(type: "text", length: 65535, nullable: false)]
    private $content;

    #[ORM\Column(type: "datetime")]
    private $createdAt;

    #[ORM\ManyToOne(targetEntity: Topics::class, cascade: ["remove"])]
    #[ORM\JoinColumn(referencedColumnName: "category_id",nullable: true)]
    private $category;

    #[ORM\OneToMany(targetEntity: Replies::class, mappedBy: 'threads', orphanRemoval: true)]  // OneToMany relationship
    private $replies;

    #[ORM\OneToMany(targetEntity:Votes::class, mappedBy: "threads",orphanRemoval: true)] // Added this property to establish the inverse side of the relationship
    private $votes;

    public function __construct()
    {
        $this->replies = new ArrayCollection();
        $this->votes = new ArrayCollection();
    }

    public function getThreadId(): ?int
    {
        return $this->threadId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

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

    public function getCategory(): ?Topics
    {
        return $this->category;
    }

    public function setCategory(?Topics $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection<int, Replies>
     */
    public function getReplies(): Collection
    {
        return $this->replies;
    }


    public function addReply(Replies $reply): static
    {
        if (!$this->replies->contains($reply)) {
            $this->replies->add($reply);
            $reply->setThreads($this);
        }

        return $this;
    }

    public function removeReply(Replies $reply): static
    {
        if ($this->replies->removeElement($reply)) {
            // set the owning side to null (unless already changed)
            if ($reply->getThreads() === $this) {
                $reply->setThreads(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection|Votes[]
     */
    public function getVotes(): Collection
    {
        return $this->votes;
    }

    public function addVote(Votes $vote): self
    {
        if (!$this->votes->contains($vote)) {
            $this->votes[] = $vote;
            $vote->setThreads($this);
        }

        return $this;
    }

    public function removeVote(Votes $vote): self
    {
        if ($this->votes->removeElement($vote)) {
            // set the owning side to null (unless already changed)
            if ($vote->getThreads() === $this) {
                $vote->setThreads(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->title;
    }

    public function isLikedByUser(User $user):bool
    {
        return $this->votes->contains($user);
    }

    public function countVotesAsString(): string
    {
        $upvotesCount = 0;
        $downvotesCount = 0;

        foreach ($this->votes as $vote) {
            if ($vote->getVoteType() === 'upvote') {
                $upvotesCount++;
            } elseif ($vote->getVoteType() === 'downvote') {
                $downvotesCount++;
            }
        }

        return "Upvotes: $upvotesCount, Downvotes: $downvotesCount";
    }

}

