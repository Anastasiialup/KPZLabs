<?php
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
