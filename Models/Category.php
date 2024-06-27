<?php
class Category
{
    private string $name;
    private string $icon;

    public function __construct(string $name, string $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
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
    // icon
    public function getIcon(): string
    {
        return $this->icon;
    }
    public function setIcon($_icon): void
    {
        $this->icon = $_icon;
    }
}
