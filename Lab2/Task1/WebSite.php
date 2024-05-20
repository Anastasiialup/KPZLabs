<?php

require_once 'DomesticSubscription.php';
require_once 'EducationalSubscription.php';
require_once 'PremiumSubscription.php';

class WebSite
{
    public function createSubscription($type)
    {
        switch ($type) {
            case 'domestic':
                return new DomesticSubscription(10, 1, ['news', 'sports']);
            case 'educational':
                return new EducationalSubscription(15, 3, ['documentary', 'educational']);
            case 'premium':
                return new PremiumSubscription(20, 6, ['all channels']);
            default:
                throw new Exception("Invalid subscription type.");
        }
    }
}
