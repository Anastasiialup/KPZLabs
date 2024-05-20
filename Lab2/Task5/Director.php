<?php
// Director.php
class Director
{
    private $builder;

    public function setBuilder(CharacterBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function createCharacter()
    {
        $this->builder->createCharacter();
        $this->builder->buildAttributes()->buildAppearance()->buildInventory();
    }

    public function getCharacter()
    {
        return $this->builder->getCharacter();
    }
}