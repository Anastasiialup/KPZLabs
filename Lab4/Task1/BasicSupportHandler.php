<?php

// Файл: BasicSupportHandler.php

require_once 'SupportHandler.php';
class BasicSupportHandler extends SupportHandler {
    public function handleRequest($level) {
        if ($level == 'basic') {
            return "Basic support level: Provide basic assistance.";
        } else {
            return parent::handleRequest($level);
        }
    }
}
