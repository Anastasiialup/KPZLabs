<?php

// Файл: ArtifactDecorator.php

require_once 'InventoryDecorator.php';

class ArtifactDecorator extends InventoryDecorator {
    public function getDescription() {
        return $this->hero->getDescription() . ' carrying an artifact';
    }
}
