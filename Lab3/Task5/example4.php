<?php

require_once 'LightNode.php';
require_once 'LightElementCommand.php';

// Створення елемента розмітки без дочірніх елементів та команди
$rootElement = new LightElementNode('div', 'block', 'pair', 'root', [], null);

// Створення команди для елемента розмітки
$elementCommand = new LightElementCommand($rootElement);

// Виклик методу події OnCreated для елемента розмітки
$rootElement->onCreated();

// Вивід розмітки елемента
echo $rootElement->render();
