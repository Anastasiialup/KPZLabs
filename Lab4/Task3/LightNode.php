<?php

require_once 'LightElementNode.php';
require_once 'LightTextNode.php';
// Клас, що представляє базовий вузол розмітки LightHTML
class LightNode
{
    protected $tag;
    protected $attributes = [];
    protected $children = [];
    protected $eventListeners = [];

    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function addChild(LightNode $child)
    {
        $this->children[] = $child;
    }

    public function addEventListener($event, $listener)
    {
        if (!isset($this->eventListeners[$event])) {
            $this->eventListeners[$event] = [];
        }
        $this->eventListeners[$event][] = $listener;
    }

    public function render()
    {
        $output = "<{$this->tag}";
        foreach ($this->attributes as $name => $value) {
            $output .= " $name=\"$value\"";
        }
        foreach ($this->eventListeners as $event => $listeners) {
            $output .= " $event=\"";
            foreach ($listeners as $listener) {
                $output .= $listener . '; ';
            }
            $output .= '"';
        }
        $output .= ">";
        foreach ($this->children as $child) {
            $output .= $child->render();
        }
        $output .= "</{$this->tag}>";
        return $output;
    }
}
