<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PanierRepository;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $idPanier;

    #[ORM\Column(type: "integer")]
    private $idUser;

    #[ORM\Column(type: "integer")]
    private $quantite;

    #[ORM\Column(type: "integer")]
    private $price;

    #[ORM\ManyToOne(targetEntity: Product::class)]
    #[ORM\JoinColumn(name: "id_produit", referencedColumnName: "id")]
    private $idProduit;

    public function getIdPanier(): ?int
    {
        return $this->idPanier;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): static
    {
        $this->quantite = $quantite;

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

    public function getIdProduit(): ?Product
    {
        return $this->idProduit;
    }

    public function setIdProduit(?Product $idProduit): static
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    



}