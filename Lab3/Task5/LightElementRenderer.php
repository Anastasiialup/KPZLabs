<?php

require_once 'LightNode.php';

// Клас для рендерингу елементів розмітки
class LightElementRenderer {
    // Шаблонний метод для рендерингу елементів
    public function renderElement(LightNode $element) {
        $output = $this->renderStartTag($element);
        $output .= $this->renderContent($element);
        $output .= $this->renderEndTag($element);
        return $output;
    }

    // Метод для рендерингу початкового тегу
    protected function renderStartTag(LightNode $element) {
        $output = "<{$element->getTag()}";
        foreach ($element->getAttributes() as $name => $value) {
            $output .= " $name=\"$value\"";
        }
        $output .= ">";
        return $output;
    }

    // Метод для рендерингу вмісту елемента
    protected function renderContent(LightNode $element) {
        $output = '';
        foreach ($element->getChildren() as $child) {
            $output .= $child->render();
        }
        return $output;
    }

    // Метод для рендерингу закриваючого тегу
    protected function renderEndTag(LightNode $element) {
        return "</{$element->getTag()}>";
    }
}
?>
