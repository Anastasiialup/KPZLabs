<?php
// index.php

require_once 'LightHTMLWeight.php';

$html = new LightHTMLWeight();
$bookHTML = $html->parseBook('book.txt');
echo $bookHTML->render();

$memoryUsage = $html->calculateMemoryUsage($bookHTML);
echo "Memory usage: $memoryUsage bytes\n";
?>
