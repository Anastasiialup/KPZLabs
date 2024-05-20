<?php

// Файл: Netbook.php

require_once 'Device.php';

class Netbook extends Device
{
    public function getDescription()
    {
        return "This is a {$this->getType()} netbook.";
    }
}
