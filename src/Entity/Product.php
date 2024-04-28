<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProductRepository;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[UniqueEntity(fields: ['name'], message: 'There is already a product with this name')]

class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    
    #[Assert\NotBlank(message: "Name is required")]
    #[ORM\Column(length: 255, unique: true)]
    private $name;

    
    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "Price is required")]
    #[Assert\Positive(message: "Price should be positive")]
    private $price;

   
    #[ORM\Column (length:255)]
    #[Assert\NotBlank(message: "description is required")]

    private $description;

 
    #[ORM\Column (length:255)]
   // #[Assert\NotBlank(message: "image is required")]

    private $image;


    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "quantity is required")]

    private $quantity;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
    
   


}
