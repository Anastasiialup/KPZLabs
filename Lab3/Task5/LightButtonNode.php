<?php
require_once 'LightNode.php'; // Підключаємо файл з класами мови розмітки

// Клас для кнопки з можливістю зміни вигляду в залежності від стану
class LightButtonNode extends LightNode {
    protected $state;

    public function __construct($tag, $state) {
        parent::__construct($tag);
        $this->state = $state;
    }

    public function render() {
        $class = ($this->state === 'active') ? 'active-button' : 'inactive-button';
        return "<{$this->tag} class='{$class}'>{$this->tag}</{$this->tag}>";
    }

    public function setState($state) {
        $this->state = $state;
    }
}
?>
