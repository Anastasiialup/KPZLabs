<?php

require_once 'Logger.php';
require_once 'FileWriter.php';

// Клас-адаптер для логування у файл
class FileLoggerAdapter extends Logger
{
    private $fileWriter;

    public function __construct(FileWriter $fileWriter) {
        $this->fileWriter = $fileWriter;
    }

    public function Log($message) {
        parent::Log($message);
        $this->fileWriter->Write($message); // Запис повідомлення в файл
    }

    public function Error($message) {
        parent::Error($message);
        $this->fileWriter->WriteLine($message); // Запис повідомлення в файл
    }

    public function Warn($message) {
        parent::Warn($message);
        $this->fileWriter->WriteLine($message); // Запис повідомлення в файл
    }
}

?>
