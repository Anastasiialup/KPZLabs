<?php

// Клас для представлення працівника зоопарку
class Zookeeper {
    private $name;
    private $position;
    private $assignedEquipment = []; // масив для приладдя, яке призначено працівнику

    public function __construct($name, $position) {
        $this->name = $name;
        $this->position = $position;
    }

    public function getName() {
        return $this->name;
    }

    public function getPosition() {
        return $this->position;
    }

    public function assignEquipment($equipment) {
        $this->assignedEquipment[] = $equipment;
    }

    public function getAssignedEquipment() {
        return $this->assignedEquipment;
    }
}