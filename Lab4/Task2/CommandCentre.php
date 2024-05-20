<?php
class CommandCentre
{
    private $runways = [];
    private $aircrafts = [];

    public function __construct($runways, $aircrafts)
    {
        $this->runways = $runways;
        $this->aircrafts = $aircrafts;
    }

    public function landAircraft($aircraft, $runway)
    {
        $aircraft->land();
        $runway->IsBusyWithAircraft = $aircraft;
    }

    public function takeOffAircraft($aircraft, $runway)
    {
        $aircraft->takeOff();
        $runway->IsBusyWithAircraft = null;
    }
}
?>
