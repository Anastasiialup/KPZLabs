<?php
require_once 'SmartTextCheckerProxy.php';
require_once 'SmartTextReaderLockerProxy.php';

$checker = new SmartTextCheckerProxy();
$lockedReader = new SmartTextReaderLockerProxy('/secret_file\.txt/');

// Read file.txt
echo "Reading file.txt:\n";
$content1 = $checker->readText('file.txt');
print_r($content1);

// Read secret_file.txt
echo "\nReading secret_file.txt:\n";
$content2 = $lockedReader->readText('secret_file.txt');
print_r($content2);
?>
