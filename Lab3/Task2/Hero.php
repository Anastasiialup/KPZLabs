<?php

abstract class Hero {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function getDescription();
}