<?php

require_once 'Character.php';
require_once 'CharacterBuilder.php';
require_once 'HeroBuilder.php';
require_once 'EnemyBuilder.php';
require_once 'Director.php';

// Створення білдера для героя
$heroBuilder = new HeroBuilder();
// Створення білдера для ворога
$enemyBuilder = new EnemyBuilder();

// Створення директора
$director = new Director();

// Використання білдера для створення героя
$director->setBuilder($heroBuilder);
$director->createCharacter();
$hero = $director->getCharacter();

echo "Hero character:\n";
echo $hero->display();

// Використання білдера для створення ворога
$director->setBuilder($enemyBuilder);
$director->createCharacter();
$enemy = $director->getCharacter();

echo "Enemy character:\n";
echo $enemy->display();
?>
