<?php
require_once  'LightNode.php';
require_once 'LightHTMLIterator.php';

// Створюємо дерево елементів HTML
$root = new LightElementNode('div', 'block', 'pair', 'root', [
    new LightTextNode('Hello'),
    new LightElementNode('span', 'inline', 'pair', 'child1', [
        new LightTextNode('world'),
    ]),
    new LightTextNode('!'),
]);

// Створюємо ітератор
$iterator = new LightHTMLIterator($root);

// Перебираємо всі елементи і виводимо їх
foreach ($iterator as $node) {
    echo $node->render() . "\n";
}
?>
