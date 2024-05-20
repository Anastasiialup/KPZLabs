<?php

// Файл: DeviceFactory.php

require_once 'Device.php';

abstract class DeviceFactory
{
    abstract public function createLaptop();

    abstract public function createNetbook();

    abstract public function createEBook();

    abstract public function createSmartphone();
}
