<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;



#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
 
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private $userId;

    #[ORM\Column(length: 255)]
    private ?string $userUsername = null;

    #[ORM\Column(length: 255)]
    private ?string $userEmail = null;


    #[ORM\Column(length: 255)]
    private ?string $userPassword = null;


    #[ORM\Column(length: 255)]
    private ?string $userFirstname = null;

    #[ORM\Column(length: 255)]
    private ?string $userLastname = null;


    #[ORM\Column(length: 255)]
    private ?string $userBirthday = null;


    #[ORM\Column(length: 255)]
    private ?string $userGender = null;


    #[ORM\Column(length: 255)]
    private ?string $userPicture = null;


    #[ORM\Column(length: 255)]
    private ?string $userPhonenumber = null;


    #[ORM\Column]
    private ?int $userLevel = 1;

    #[ORM\Column(length: 255)]
    private $userRole = 'user';

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
