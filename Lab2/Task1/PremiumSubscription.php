<?php

require_once 'Subscription.php';

class PremiumSubscription extends Subscription
{
    public function getDescription()
    {
        return "Premium Subscription: Monthly Fee - {$this->monthlyFee}, Min Subscription Period - {$this->minSubscriptionPeriod}, Channels - " . implode(", ", $this->channels);
    }
}
