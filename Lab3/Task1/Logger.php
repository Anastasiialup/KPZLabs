<?php

class Logger
{
    public function Log($message)
    {
        echo $this->colorize($message, "\033[32m") . PHP_EOL;
    }

    public function Error($message)
    {
        echo $this->colorize($message, "\033[31m") . PHP_EOL;
    }

    public function Warn($message)
    {
        echo $this->colorize($message, "\033[33m") . PHP_EOL;
    }

    private function colorize($string, $color)
    {
        return $color . $string . "\033[0m";
    }
}

?>
