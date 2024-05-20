<?php
require_once 'LightNode.php';

class LightHTMLIterator implements Iterator
{
    protected SplStack $stack;
    protected LightNode $root;

    public function __construct(LightNode $root)
    {
        $this->root = $root;
        $this->stack = new SplStack();
        $this->stack->push($root);
    }

    public function rewind(): void
    {
        $this->stack = new SplStack();
        $this->stack->push($this->root);
    }

    #[\ReturnTypeWillChange]
    public function valid()
    {
        return !$this->stack->isEmpty();
    }

    #[\ReturnTypeWillChange]
    public function key()
    {
        return null;
    }

    #[\ReturnTypeWillChange]
    public function current()
    {
        return $this->stack->top();
    }

    #[\ReturnTypeWillChange]
    public function next()
    {
        $node = $this->stack->pop();
        // Перевірка, чи $node є екземпляром класу LightElementNode та чи є у нього метод getChildren()
        if ($node instanceof LightElementNode && method_exists($node, 'getChildren')) {
            $children = $node->getChildren();
            foreach (array_reverse($children) as $child) {
                $this->stack->push($child);
            }
        }
    }
}
?>
