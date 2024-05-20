<?php
require_once 'LightNode.php'; // Підключаємо файл з класами мови розмітки
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
}
