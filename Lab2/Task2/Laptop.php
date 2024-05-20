<?php

// Файл: Laptop.php

require_once 'Device.php';

class Laptop extends Device
{
    public function getDescription()
    {
        return "This is a {$this->getType()} laptop.";
    }
}
