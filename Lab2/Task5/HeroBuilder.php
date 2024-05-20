<?php
// HeroBuilder.php
require_once 'CharacterBuilder.php';

class HeroBuilder extends CharacterBuilder
{
    public function buildAttributes()
    {
        $this->character->setAttributes("Strong", "Agile", "Intelligent");
        return $this;
    }

    public function buildAppearance()
    {
        $this->character->setAppearance("Tall", "Muscular", "Blonde");
        return $this;
    }

    public function buildInventory()
    {
        $this->character->setInventory("Sword", "Armor", "Potion");
        return $this;
    }
}