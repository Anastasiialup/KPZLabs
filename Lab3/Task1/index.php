<?php
require_once 'FileLoggerAdapter.php';
require_once 'FileWriter.php';
require_once 'Logger.php';

// Приклад використання
$fileWriter = new FileWriter();
$fileLogger = new FileLoggerAdapter($fileWriter);

$fileLogger->Log("This is a log message");
$fileLogger->Error("This is an error message");
$fileLogger->Warn("This is a warning message");

?>
