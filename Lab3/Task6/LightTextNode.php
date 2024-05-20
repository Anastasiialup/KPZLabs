<?php
// Файл: LightTextNode.php

require_once 'LightNode.php'; // Підключаємо файл з класом LightNode

class LightTextNode extends LightNode
{
    protected $content;

    public function __construct($content)
    {
        parent::__construct('');
        $this->content = $content;
    }

    public function render()
    {
        return $this->content;
    }

    // Перевизначений метод для прийняття відвідувача
    public function accept(HTMLVisitor $visitor)
    {
        $visitor->visitTextNode($this);
    }
}
?>
