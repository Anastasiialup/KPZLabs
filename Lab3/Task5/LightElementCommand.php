<?php

// LightElementCommand.php

class LightElementCommand {
    protected $element;

    public function __construct(?LightElementNode $element = null) {
        $this->element = $element;
    }

    public function onCreated() {
        // Перевірка, чи елемент не є null перед викликом методу getTag()
        if ($this->element !== null) {
            echo "Element '{$this->element->getTag()}' has been created.\n";
        } else {
            echo "No element has been created.\n";
        }
    }

    public function onInserted() {
        if ($this->element !== null) {
            echo "Element '{$this->element->getTag()}' has been inserted.\n";
        } else {
            echo "No element has been inserted.\n";
        }
    }

    public function onRemoved() {
        if ($this->element !== null) {
            echo "Element '{$this->element->getTag()}' has been removed.\n";
        } else {
            echo "No element has been removed.\n";
        }
    }
}

