<?php
// Клас SmartTextReader, який читає вміст текстового файлу і перетворює його на двомірний масив

class SmartTextReader
{
    public function readText($filename)
    {
        return file($filename, FILE_IGNORE_NEW_LINES);
    }
}
?>
