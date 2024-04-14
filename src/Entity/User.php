<?php

namespace App\Entity;

use App\Repository\RepliesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;


#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "user_id")]
    private int $userId;

    #[ORM\Column(name: "user_username", type: "string", length: 50, nullable: false)]
    private string $userUsername;

    #[ORM\Column(name: "user_email", type: "string", length: 50, nullable: false)]
    private string $userEmail;

    #[ORM\Column(name: "user_password", type: "string", length: 50, nullable: false)]
    private string $userPassword;

    #[ORM\Column(name: "user_firstname", type: "string", length: 50, nullable: false)]
    private string $userFirstname;

    #[ORM\Column(name: "user_lastname", type: "string", length: 50, nullable: false)]
    private string $userLastname;

    #[ORM\Column(name: "user_birthday", type: "date", nullable: false)]
    private \DateTime $userBirthday;

    #[ORM\Column(name: "user_gender", type: "string", length: 200, nullable: false)]
    private string $userGender;

    #[ORM\Column(name: "user_picture", type: "string", length: 200, nullable: false)]
    private string $userPicture;

    #[ORM\Column(name: "user_phonenumber", type: "string", length: 255, nullable: false)]
    private string $userPhonenumber;

    #[ORM\Column(name: "user_level", type: "integer", nullable: false, options: ["default" => 1])]
    private int $userLevel = 1;

    #[ORM\Column(name: "user_role", type: "string", length: 5, nullable: false, options: ["default" => "user"])]
    private string $userRole = 'user';

    #[ORM\OneToMany(targetEntity: Threads::class, mappedBy: "user")] // Update the mappedBy value
    private $threads;


    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getUserUsername(): ?string
    {
        return $this->userUsername;
    }

    public function setUserUsername(string $userUsername): static
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): static
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->userPassword;
    }

    public function setUserPassword(string $userPassword): static
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    public function getUserFirstname(): ?string
    {
        return $this->userFirstname;
    }

    public function setUserFirstname(string $userFirstname): static
    {
        $this->userFirstname = $userFirstname;

        return $this;
    }

    public function getUserLastname(): ?string
    {
        return $this->userLastname;
    }

    public function setUserLastname(string $userLastname): static
    {
        $this->userLastname = $userLastname;

        return $this;
    }

    public function getUserBirthday(): ?\DateTimeInterface
    {
        return $this->userBirthday;
    }

    public function setUserBirthday(\DateTimeInterface $userBirthday): static
    {
        $this->userBirthday = $userBirthday;

        return $this;
    }

    public function getUserGender(): ?string
    {
        return $this->userGender;
    }

    public function setUserGender(string $userGender): static
    {
        $this->userGender = $userGender;

        return $this;
    }

    public function getUserPicture(): ?string
    {
        return $this->userPicture;
    }

    public function setUserPicture(string $userPicture): static
    {
        $this->userPicture = $userPicture;

        return $this;
    }

    public function getUserPhonenumber(): ?string
    {
        return $this->userPhonenumber;
    }

    public function setUserPhonenumber(string $userPhonenumber): static
    {
        $this->userPhonenumber = $userPhonenumber;

        return $this;
    }

    public function getUserLevel(): ?int
    {
        return $this->userLevel;
    }

    public function setUserLevel(int $userLevel): static
    {
        $this->userLevel = $userLevel;

        return $this;
    }

    public function getUserRole(): ?string
    {
        return $this->userRole;
    }

    public function setUserRole(string $userRole): static
    {
        $this->userRole = $userRole;

        return $this;
    }


    public function __toString()
    {
        return $this->userUsername;
    }


}
