<?php

// Файл: Device.php

abstract class Device
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    abstract public function getDescription();
}
