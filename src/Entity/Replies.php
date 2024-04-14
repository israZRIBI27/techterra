<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Replies
 *
 * @ORM\Table(name="replies", indexes={@ORM\Index(name="replies_ibfk_1", columns={"user_id"}), @ORM\Index(name="replies_ibfk_2", columns={"thread_id"})})
 * @ORM\Entity
 */
class Replies
{
    /**
     * @var int
     *
     * @ORM\Column(name="reply_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $replyId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    /**
     * @var \Threads
     *
     * @ORM\ManyToOne(targetEntity="Threads")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="thread_id", referencedColumnName="thread_id")
     * })
     */
    private $thread;

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

    public function setCreatedAt(?\DateTimeInterface $createdAt): static
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

    public function getThread(): ?Threads
    {
        return $this->thread;
    }

    public function setThread(?Threads $thread): static
    {
        $this->thread = $thread;

        return $this;
    }


}
