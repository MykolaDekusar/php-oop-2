<?php
include_once __DIR__ . '/Product.php';
class Food extends Product
{
    private ?string $ingredients = null;
    private int $calories = 0;
    private ?string $expiration = null;
    public function __construct(string $_ingredients, int $_calories)
    {
        $this->ingredients = $_ingredients;
        $this->calories = $_calories;
    }

    // ingredients
    public function getingredients(): ?string
    {
        return $this->ingredients;
    }
    public function setingredients($_ingredients): void
    {
        $this->ingredients = $_ingredients;
    }
    // calories
    public function getCalories(): float
    {
        return $this->calories;
    }
    public function setPrice($_calories): void
    {
        $this->calories = $_calories;
    }
    // expiration
    public function getExpiration(): ?string
    {
        return $this->expiration;
    }
    public function setExpiration($_expiration): void
    {
        $this->expiration = $_expiration;
    }
}
