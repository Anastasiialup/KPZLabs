<?php

require_once 'Subscription.php';

class EducationalSubscription extends Subscription
{
    public function getDescription()
    {
        return "Educational Subscription: Monthly Fee - {$this->monthlyFee}, Min Subscription Period - {$this->minSubscriptionPeriod}, Channels - " . implode(", ", $this->channels);
    }
}
