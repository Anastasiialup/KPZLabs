<?php

// Файл: IProne.php

require_once 'Brand.php';
require_once 'DeviceFactory.php';
require_once 'Laptop.php';
require_once 'Netbook.php';
require_once 'EBook.php';
require_once 'Smartphone.php';

class IProne extends Brand
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function createLaptop()
    {
        return new Laptop("IProne");
    }

    public function createNetbook()
    {
        return new Netbook("IProne");
    }

    public function createEBook()
    {
        return new EBook("IProne");
    }

    public function createSmartphone()
    {
        return new Smartphone("IProne");
    }
}
