<?php
// Проксі SmartTextReader, який обмежує доступ до певних файлів

require_once 'SmartTextReader.php';

class SmartTextReaderLockerProxy
{
    private $reader;
    private $pattern;

    public function __construct($pattern)
    {
        $this->reader = new SmartTextReader();
        $this->pattern = $pattern;
    }

    public function readText($filename)
    {
        if (preg_match($this->pattern, $filename)) {
            echo "Access denied!\n";
            return null;
        } else {
            return $this->reader->readText($filename);
        }
    }
}
?>
