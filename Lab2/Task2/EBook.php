<?php

// Файл: EBook.php

require_once 'Device.php';

class EBook extends Device
{
    public function getDescription()
    {
        return "This is an {$this->getType()} e-book.";
    }
}
