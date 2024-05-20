<?php
// Проксі SmartTextChecker, який логує події та підраховує кількість рядків і символів

require_once 'SmartTextReader.php';

class SmartTextCheckerProxy
{
    private $reader;

    public function __construct()
    {
        $this->reader = new SmartTextReader();
    }

    public function readText($filename)
    {
        echo "File opened: $filename\n";
        $content = $this->reader->readText($filename);
        echo "File closed: $filename\n";

        $totalLines = count($content);
        $totalChars = array_sum(array_map('strlen', $content));
        echo "Total lines: $totalLines\n";
        echo "Total characters: $totalChars\n";

        return $content;
    }
}
?>
