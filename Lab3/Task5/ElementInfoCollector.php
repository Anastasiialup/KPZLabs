<?php
// Файл: ElementInfoCollector.php

require_once 'HTMLVisitor.php'; // Підключаємо файл з інтерфейсом відвідувача
require_once 'LightNode.php'; // Підключаємо файл з класом LightNode
require_once 'LightTextNode.php'; // Підключаємо файл з класом LightTextNode

// Конкретний відвідувач, який збирає інформацію про елементи
class ElementInfoCollector implements HTMLVisitor {
    private $elementInfo = [];

    public function visitElement(LightNode $element) {
        $tag = $element->getTag();
        $attributes = $element->getAttributes();
        $children = $element->getChildren();

        $this->elementInfo[] = [
            'tag' => $tag,
            'attributes' => $attributes,
            'children' => $children
        ];

        // Рекурсивний виклик для дочірніх елементів
        foreach ($children as $child) {
            $child->accept($this);
        }
    }

    public function visitTextNode(LightTextNode $textNode) {
        // Не робимо нічого з текстовими вузлами
    }

    public function getElementInfo() {
        return $this->elementInfo;
    }
}
?>
