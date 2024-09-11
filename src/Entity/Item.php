<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
class Item {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $product_name = null;

    #[ORM\Column]
    private ?int $product_stock = null;

    #[ORM\Column]
    private ?float $product_cost = null;

    #[ORM\Column(length: 255)]
    private ?string $product_seller = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): static
    {
        $this->product_name = $product_name;

        return $this;
    }

    public function getProductStock(): ?int
    {
        return $this->product_stock;
    }

    public function setProductStock(int $product_stock): static
    {
        $this->product_stock = $product_stock;

        return $this;
    }

    public function getProductCost(): ?float
    {
        return $this->product_cost;
    }

    public function setProductCost(float $product_cost): static
    {
        $this->product_cost = $product_cost;

        return $this;
    }

    public function getProductSeller(): ?string
    {
        return $this->product_seller;
    }

    public function setProductSeller(string $product_seller): static
    {
        $this->product_seller = $product_seller;

        return $this;
    }
}