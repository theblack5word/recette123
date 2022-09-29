<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $is_favorite = null;

    #[ORM\Column(length: 100)]
    private ?string $ingredient1 = null;

    #[ORM\Column(length: 100)]
    private ?string $ingredient2 = null;

    #[ORM\Column(length: 100)]
    private ?string $ingredient3 = null;

    #[ORM\Column]
    private ?int $quantity1 = null;

    #[ORM\Column]
    private ?int $quantity2 = null;

    #[ORM\Column]
    private ?int $quantity3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function isIsFavorite(): ?bool
    {
        return $this->is_favorite;
    }

    public function setIsFavorite(bool $is_favorite): self
    {
        $this->is_favorite = $is_favorite;

        return $this;
    }

    public function getIngredient1(): ?string
    {
        return $this->ingredient1;
    }

    public function setIngredient1(string $ingredient1): self
    {
        $this->ingredient1 = $ingredient1;

        return $this;
    }

    public function getIngredient2(): ?string
    {
        return $this->ingredient2;
    }

    public function setIngredient2(string $ingredient2): self
    {
        $this->ingredient2 = $ingredient2;

        return $this;
    }

    public function getIngredient3(): ?string
    {
        return $this->ingredient3;
    }

    public function setIngredient3(string $ingredient3): self
    {
        $this->ingredient3 = $ingredient3;

        return $this;
    }

    public function getQuantity1(): ?int
    {
        return $this->quantity1;
    }

    public function setQuantity1(int $quantity1): self
    {
        $this->quantity1 = $quantity1;

        return $this;
    }

    public function getQuantity2(): ?int
    {
        return $this->quantity2;
    }

    public function setQuantity2(int $quantity2): self
    {
        $this->quantity2 = $quantity2;

        return $this;
    }

    public function getQuantity3(): ?int
    {
        return $this->quantity3;
    }

    public function setQuantity3(int $quantity3): self
    {
        $this->quantity3 = $quantity3;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
