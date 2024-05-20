<?php

// Файл: UltimateSupportHandler.php
require_once 'SupportHandler.php';
class UltimateSupportHandler extends SupportHandler {
    public function handleRequest($level) {
        if ($level == 'ultimate') {
            return "Ultimate support level: Provide top-notch assistance.";
        } else {
            return parent::handleRequest($level);
        }
    }
}
