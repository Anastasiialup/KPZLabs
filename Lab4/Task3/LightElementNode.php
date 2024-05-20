<?php
require_once 'LightNode.php'; // Підключаємо файл з класами мови розмітки

// Дочірній клас для елемента розмітки з вкладеними елементами
class LightElementNode extends LightNode {
    protected $displayType;
    protected $closingType;
    protected $cssClasses;
    protected $children;

    public function __construct($tag, $displayType, $closingType, $cssClasses, $children) {
        parent::__construct($tag, '');
        $this->displayType = $displayType;
        $this->closingType = $closingType;
        $this->cssClasses = $cssClasses;
        $this->children = $children;
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
}