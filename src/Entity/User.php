<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_username", type="string", length=50, nullable=false)
     */
    private $userUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=50, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=50, nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_firstname", type="string", length=50, nullable=false)
     */
    private $userFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lastname", type="string", length=50, nullable=false)
     */
    private $userLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_birthday", type="string", length=50, nullable=false)
     */
    private $userBirthday;

    /**
     * @var string
     *
     * @ORM\Column(name="user_gender", type="string", length=200, nullable=false)
     */
    private $userGender;

    /**
     * @var string
     *
     * @ORM\Column(name="user_picture", type="string", length=200, nullable=false)
     */
    private $userPicture;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="user")
     * @ORM\JoinTable(name="panier",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
     *   }
     * )
     */
    private $idProduct = array();

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Events", inversedBy="user")
     * @ORM\JoinTable(name="participation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_event", referencedColumnName="id_event")
     *   }
     * )
     */
    private $idEvent = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProduct = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idEvent = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    public function getUserBirthday(): ?string
    {
        return $this->userBirthday;
    }

    public function setUserBirthday(string $userBirthday): static
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

    /**
     * @return Collection<int, Product>
     */
    public function getIdProduct(): Collection
    {
        return $this->idProduct;
    }

    public function addIdProduct(Product $idProduct): static
    {
        if (!$this->idProduct->contains($idProduct)) {
            $this->idProduct->add($idProduct);
        }

        return $this;
    }

    public function removeIdProduct(Product $idProduct): static
    {
        $this->idProduct->removeElement($idProduct);

        return $this;
    }

    /**
     * @return Collection<int, Events>
     */
    public function getIdEvent(): Collection
    {
        return $this->idEvent;
    }

    public function addIdEvent(Events $idEvent): static
    {
        if (!$this->idEvent->contains($idEvent)) {
            $this->idEvent->add($idEvent);
        }

        return $this;
    }

    public function removeIdEvent(Events $idEvent): static
    {
        $this->idEvent->removeElement($idEvent);

        return $this;
    }
    #[ORM\OneToMany(targetEntity: Reponse::class, mappedBy: 'Project')]
    private Collection $Project;
}
