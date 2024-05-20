<?php

require_once 'LightElementNode.php';
require_once 'LightTextNode.php';
require_once '../Lab5/HTMLVisitor.php'; // Підключаємо файл з відвідувачем
//require_once 'HTMLVisitor.php'; // Якщо не спрацювало минуле, бо там айл в іншій папці був

// Клас, що представляє базовий вузол розмітки LightHTML
class LightNode
{
    protected $tag; // тег HTML елемента
    protected $attributes = []; // атрибути елемента
    protected $children = []; // дочірні вузли

    // Конструктор класу
    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    // Додавання атрибутів елемента
    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    // Додавання дочірнього вузла
    public function addChild(LightNode $child)
    {
        $this->children[] = $child;
    }

    // Генерація HTML розмітки для поточного вузла та всіх дочірних вузлів
    public function render()
    {
        $output = "<{$this->tag}";

        foreach ($this->attributes as $name => $value) {
            $output .= " $name=\"$value\"";
        }

        $output .= ">";

        foreach ($this->children as $child) {
            $output .= $child->render();
        }

        $output .= "</{$this->tag}>";

        return $output;
    }

    // Метод для отримання тегу елемента
    public function getTag()
    {
        return $this->tag;
    }

    // Метод для отримання атрибутів елемента
    public function getAttributes()
    {
        return $this->attributes;
    }

    // Метод для отримання дочірніх елементів
    public function getChildren()
    {
        return $this->children;
    }

    // Метод для прийняття відвідувача
    public function accept(HTMLVisitor $visitor)
    {
        $visitor->visitElement($this);
    }
}
?>
