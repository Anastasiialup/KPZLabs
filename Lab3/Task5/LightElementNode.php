<?php

require_once 'LightNode.php'; // Підключаємо файл з класом LightNode

// Дочірній клас для елемента розмітки з вкладеними елементами
class LightElementNode extends LightNode {
    protected $displayType;
    protected $closingType;
    protected $cssClasses;
    protected $children;
    protected $command; // Додано поле для зберігання команди

    public function __construct($tag, $displayType, $closingType, $cssClasses, $children, $command = null) {
        parent::__construct($tag, '');
        $this->displayType = $displayType;
        $this->closingType = $closingType;
        $this->cssClasses = $cssClasses;
        $this->children = $children;
        $this->command = $command; // Додано ініціалізацію команди
    }

    // Додано метод для отримання команди
    public function getCommand() {
        return $this->command;
    }

    public function render() {
        $output = "<{$this->tag} class='{$this->cssClasses}' style='display:{$this->displayType}'>";
        foreach ($this->children as $child) {
            $output .= $child->render();
        }
        if ($this->closingType === 'pair') {
            $output .= "</{$this->tag}>";
        } elseif ($this->closingType === 'single') {
            $output .= " />";
        }
        return $output;
    }

    // Додано метод для виклику події OnCreated
    public function onCreated() {
        if ($this->command) {
            $this->command->onCreated();
        }
    }

    // Додано метод для виклику події OnInserted
    public function onInserted() {
        if ($this->command) {
            $this->command->onInserted();
        }
    }

    // Додано метод для виклику події OnRemoved
    public function onRemoved() {
        if ($this->command) {
            $this->command->onRemoved();
        }
    }

    // Перевизначений метод для прийняття відвідувача
    public function accept(HTMLVisitor $visitor)
    {
        $visitor->visitElement($this);
    }
}

?>
