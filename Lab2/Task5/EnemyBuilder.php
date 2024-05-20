<?php
// EnemyBuilder.php
require_once 'CharacterBuilder.php';

class EnemyBuilder extends CharacterBuilder
{
    public function buildAttributes()
    {
        $this->character->setAttributes("Weak", "Slow", "Dumb");
        return $this;
    }

    public function buildAppearance()
    {
        $this->character->setAppearance("Short", "Scrawny", "Bald");
        return $this;
    }

    public function buildInventory()
    {
        $this->character->setInventory("Dagger", "Rags", "Poison");
        return $this;
    }
}