<?php

require_once 'Hero.php';
require_once 'Warrior.php';
require_once 'Mage.php';
require_once 'Paladin.php';
require_once 'WeaponDecorator.php';
require_once 'ArmorDecorator.php';
require_once 'ArtifactDecorator.php';
require_once 'InventoryDecorator.php';

// Приклад використання
$hero = new Mage('Gandalf');
$hero = new WeaponDecorator($hero);
$hero = new ArmorDecorator($hero);
$hero = new ArtifactDecorator($hero);

echo $hero->getDescription(); // Output: Gandalf is a mage with a weapon wearing armor carrying an artifact
?>