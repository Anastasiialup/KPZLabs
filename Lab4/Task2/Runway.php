<?php
class Runway
{
    public $Id;
    public $IsBusyWithAircraft;

    public function __construct()
    {
        $this->Id = uniqid();
        $this->IsBusyWithAircraft = null;
    }

    public function checkIsActive()
    {
        return $this->IsBusyWithAircraft !== null && $this->IsBusyWithAircraft->IsTakingOff;
    }
}
?>
