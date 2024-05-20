<?php
// Файл: example3.php

require_once 'LightNode.php';
require_once 'HTMLVisitor.php';
require_once 'ElementInfoCollector.php';

// Створення тегу <div>
$div = new LightNode('div');
$div->setAttribute('class', 'container');

// Додавання тексту до тегу <div>
$textNode = new LightNode('span');
$textNode->addChild(new LightTextNode('Hello, world!'));

// Додавання дочірнього вузла до тегу <div>
$div->addChild($textNode);

// Створюємо екземпляр відвідувача
$visitor = new ElementInfoCollector();

// Відвідуємо кореневий елемент
$div->accept($visitor);

// Отримуємо інформацію про елементи
$elementInfo = $visitor->getElementInfo();

// Виводимо інформацію
print_r($elementInfo);
?>
