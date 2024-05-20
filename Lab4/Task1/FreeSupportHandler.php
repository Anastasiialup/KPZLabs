<?php

require_once 'SupportHandler.php';
class FreeSupportHandler extends SupportHandler {
    public function handleRequest($level) {
        if ($level === "free") {
            return "Welcome to our free support level! You have access to basic troubleshooting tips.";
        } else {
            return parent::handleRequest($level);
        }
    }
}
?>
