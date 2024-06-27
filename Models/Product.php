<?php
require_once __DIR__ . '/Category.php';

class Product
{
    private string $name;
    private float $price = 0;
    private ?string $description = null;
    private Category $category;

    public function __construct(string $name, Category $category)
    {
        $this->setName($name);
        $this->setCategory($category);
    }

    // name
    public function getName(): string
    {
        return $this->name;
    }
    public function setName($_name): void
    {
        $this->name = $_name;
    }
    // price
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice($_price): void
    {
        $this->price = $_price;
    }
    // description
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setDescription($_description): void
    {
        $this->description = $_description;
    }
    // category
    public function getCategory(): Category
    {
        return $this->category;
    }
    public function setCategory(Category $_category): void
    {
        $this->category = $_category;
    }
}
