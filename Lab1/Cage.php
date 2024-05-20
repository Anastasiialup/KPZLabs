<?php

// Клас для представлення вольєру
class Cage {
    protected $size;
    protected $type;

    public function __construct($size, $type) {
        $this->size = $size;
        $this->type = $type;
    }

    public function __toString() {
        return $this->size . ' (' . $this->type . ')';
    }

    public function getType() {
        return $this->type;
    }
}