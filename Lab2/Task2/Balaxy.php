<?php

// Файл: Balaxy.php

require_once 'Brand.php';
require_once 'DeviceFactory.php';
require_once 'Laptop.php';
require_once 'Netbook.php';
require_once 'EBook.php';
require_once 'Smartphone.php';

class Balaxy extends Brand
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function createLaptop()
    {
        return new Laptop("Balaxy");
    }

    public function createNetbook()
    {
        return new Netbook("Balaxy");
    }

    public function createEBook()
    {
        return new EBook("Balaxy");
    }

    public function createSmartphone()
    {
        return new Smartphone("Balaxy");
    }
}
