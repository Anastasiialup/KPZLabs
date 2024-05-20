<?php
// Character.php
class Character
{
    private $attributes;
    private $appearance;
    private $inventory;

    public function setAttributes($strength, $agility, $intelligence)
    {
        $this->attributes = compact('strength', 'agility', 'intelligence');
    }

    public function setAppearance($height, $build, $hairColor)
    {
        $this->appearance = compact('height', 'build', 'hairColor');
    }

    public function setInventory($weapon, $armor, $item)
    {
        $this->inventory = compact('weapon', 'armor', 'item');
    }

    public function display()
    {
        $info = "Attributes: " . implode(", ", $this->attributes) . PHP_EOL;
        $info .= "Appearance: " . implode(", ", $this->appearance) . PHP_EOL;
        $info .= "Inventory: " . implode(", ", $this->inventory) . PHP_EOL;
        return $info;
    }
}