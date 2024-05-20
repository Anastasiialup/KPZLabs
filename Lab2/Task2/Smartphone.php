<?php

// Файл: Smartphone.php

require_once 'Device.php';

class Smartphone extends Device
{
    public function getDescription()
    {
        return "This is a {$this->getType()} smartphone.";
    }
}
