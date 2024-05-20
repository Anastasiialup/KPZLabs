<?php

abstract class Subscription
{
    protected $monthlyFee;
    protected $minSubscriptionPeriod;
    protected $channels;

    public function __construct($monthlyFee, $minSubscriptionPeriod, $channels)
    {
        $this->monthlyFee = $monthlyFee;
        $this->minSubscriptionPeriod = $minSubscriptionPeriod;
        $this->channels = $channels;
    }

    public function getMonthlyFee()
    {
        return $this->monthlyFee;
    }

    public function getMinSubscriptionPeriod()
    {
        return $this->minSubscriptionPeriod;
    }

    public function getChannels()
    {
        return $this->channels;
    }

    abstract public function getDescription();
}
