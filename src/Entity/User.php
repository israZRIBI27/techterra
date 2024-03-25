<?php

namespace App\Entity;

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

}
