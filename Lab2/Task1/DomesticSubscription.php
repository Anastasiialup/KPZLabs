<?php

require_once 'Subscription.php';

class DomesticSubscription extends Subscription
{
    public function getDescription()
    {
        return "Domestic Subscription: Monthly Fee - {$this->monthlyFee}, Min Subscription Period - {$this->minSubscriptionPeriod}, Channels - " . implode(", ", $this->channels);
    }
}
