<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\VotesRepository;
use App\Entity\Threads;

#[ORM\Entity(repositoryClass: VotesRepository::class)]

class Votes
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(name: "vote_id", type: "integer")]
    private $voteId;


    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "id",referencedColumnName: "id")]
    private $user;


    #[ORM\ManyToOne(targetEntity: Threads::class, inversedBy: "svote")] // Updated the inversedBy value
    #[ORM\JoinColumn(name: "thread_id", referencedColumnName: "thread_id", onDelete: "CASCADE")]
    private $threads;


    #[ORM\Column(type: "string", length: 8)]
    private string $voteType;



    public function getThreads(): ?Threads
    {
        return $this->threads;
    }

    public function setThreads(?Threads $threads): static
    {
        $this->threads = $threads;

        return $this;
    }

    public function getVoteId(): ?int
    {
        return $this->voteId;
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


    public function getVoteType(): ?string
    {
        return $this->voteType;
    }

    public function setVoteType(string $voteType): static
    {
        $this->voteType = $voteType;

        return $this;
    }


}
