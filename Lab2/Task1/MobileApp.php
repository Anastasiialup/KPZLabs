<?php

require_once 'DomesticSubscription.php';
require_once 'EducationalSubscription.php';
require_once 'PremiumSubscription.php';
class MobileApp
{
    public function createSubscription($type)
    {
        switch ($type) {
            case 'domestic':
                return new DomesticSubscription(12, 1, ['news', 'sports', 'music']);
            case 'educational':
                return new EducationalSubscription(17, 3, ['documentary', 'educational', 'science']);
            case 'premium':
                return new PremiumSubscription(22, 6, ['all channels', 'on-demand movies']);
            default:
                throw new Exception("Invalid subscription type.");
        }
    }
}
