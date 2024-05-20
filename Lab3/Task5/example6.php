<?php
require_once 'LightElementRenderer.php';
require_once 'LightNode.php';
require_once 'LightTextNode.php';

// Створення елементів розмітки
$div = new LightNode('div');
$div->setAttribute('class', 'container');
$textNode = new LightTextNode('Hello, world!');
$div->addChild($textNode);

// Рендеринг елементів
$renderer = new LightElementRenderer();
echo $renderer->renderElement($div);
?>
