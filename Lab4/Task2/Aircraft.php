<?php
class Aircraft
{
    public $Name;
    public $IsTakingOff;

    public function __construct($name)
    {
        $this->Name = $name;
        $this->IsTakingOff = false;
    }

    public function land()
    {
        echo "Aircraft {$this->Name} is landing.\n";
    }

    public function takeOff()
    {
        echo "Aircraft {$this->Name} is taking off.\n";
    }
}
?>
