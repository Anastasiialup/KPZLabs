<?php

// Файл: PremiumSupportHandler.php

require_once 'SupportHandler.php';
class PremiumSupportHandler extends SupportHandler {
    public function handleRequest($level) {
        if ($level == 'premium') {
            return "Premium support level: Provide advanced assistance.";
        } else {
            return parent::handleRequest($level);
        }
    }
}
