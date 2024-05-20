<?php

require_once 'DomesticSubscription.php';
require_once 'EducationalSubscription.php';
require_once 'PremiumSubscription.php';
class ManagerCall
{
    public function createSubscription($type)
    {
        switch ($type) {
            case 'domestic':
                return new DomesticSubscription(14, 1, ['news', 'sports', 'music', 'comedy']);
            case 'educational':
                return new EducationalSubscription(19, 3, ['documentary', 'educational', 'science', 'history']);
            case 'premium':
                return new PremiumSubscription(24, 6, ['all channels', 'on-demand movies', 'premium support']);
            default:
                throw new Exception("Invalid subscription type.");
        }
    }
}
