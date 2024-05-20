<?php

// Файл: Kiaomi.php

require_once 'Brand.php';
require_once 'DeviceFactory.php';
require_once 'Laptop.php';
require_once 'Netbook.php';
require_once 'EBook.php';
require_once 'Smartphone.php';

class Kiaomi extends Brand
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function createLaptop()
    {
        return new Laptop("Kiaomi");
    }

    public function createNetbook()
    {
        return new Netbook("Kiaomi");
    }

    public function createEBook()
    {
        return new EBook("Kiaomi");
    }

    public function createSmartphone()
    {
        return new Smartphone("Kiaomi");
    }
}
