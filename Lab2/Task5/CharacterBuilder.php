<?php
// CharacterBuilder.php
abstract class CharacterBuilder
{
    protected $character;

    public function createCharacter()
    {
        $this->character = new Character();
    }

    abstract public function buildAttributes();

    abstract public function buildAppearance();

    abstract public function buildInventory();

    public function getCharacter()
    {
        return $this->character;
    }
}