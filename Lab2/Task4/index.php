<?php
// index.php

require_once 'Virus.php';

// Створення вірусів
$virus1 = new Virus(10, 2, 'Virus1', 'Coronavirus');
$virus2 = new Virus(8, 1, 'Virus2', 'Influenza');
$virus3 = new Virus(15, 3, 'Virus3', 'Ebola');

// Додаємо дітей до батьківських вірусів
$virus1->addChild(new Virus(5, 1, 'Virus1.1', 'Coronavirus'));
$virus1->addChild(new Virus(3, 1, 'Virus1.2', 'Coronavirus'));
$virus2->addChild(new Virus(4, 1, 'Virus2.1', 'Influenza'));
$virus3->addChild(new Virus(7, 2, 'Virus3.1', 'Ebola'));

// Клонування вірусів
$clone1 = clone $virus1;
$clone2 = clone $virus2;
$clone3 = clone $virus3;

// Вивід інформації про віруси та їх клони
echo "Original Virus 1:" . PHP_EOL;
echo $virus1->display();

echo "Clone Virus 1:" . PHP_EOL;
echo $clone1->display();

echo "Original Virus 2:" . PHP_EOL;
echo $virus2->display();

echo "Clone Virus 2:" . PHP_EOL;
echo $clone2->display();

echo "Original Virus 3:" . PHP_EOL;
echo $virus3->display();

echo "Clone Virus 3:" . PHP_EOL;
echo $clone3->display();
