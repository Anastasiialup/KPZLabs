<?php
require_once 'LightNode.php';

// Створення тегу <div>
$div = new LightNode('div');
$div->setAttribute('class', 'container');

// Додавання тексту до тегу <div>
$textNode = new LightNode('span');
$textNode->addChild(new LightTextNode('Hello, world!'));

// Додавання дочірнього вузла до тегу <div>
$div->addChild($textNode);

// Вивід розмітки
echo $div->render();



// Створення текстового вузла
$textNode = new LightTextNode('This is a text node.');

// Створення елемента розмітки з вкладеними елементами
$innerElement = new LightElementNode('div', 'block', 'pair', 'inner', [$textNode]);
$outerElement = new LightElementNode('div', 'block', 'pair', 'outer', [$innerElement]);

// Виведення HTML
echo $outerElement->render();



require_once 'LightNode.php'; // Підключаємо файл з класами мови розмітки

// Створюємо текстовий вузол
$textNode1 = new LightTextNode('John');
$textNode2 = new LightTextNode('Doe');

// Створюємо елементи таблиці з вкладеними текстовими вузлами
$tableRow1 = new LightElementNode('tr', 'block', 'pair', 'row', [$textNode1]);
$tableRow2 = new LightElementNode('tr', 'block', 'pair', 'row', [$textNode2]);

// Створюємо таблицю з вкладеними рядками
$table = new LightElementNode('table', 'block', 'pair', 'table', [$tableRow1, $tableRow2]);

// Виводимо HTML
echo $table->render();
?>
