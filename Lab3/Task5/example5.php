<?php
require_once 'LightButtonNode.php';

// Створення кнопки зі станом 'active'
$activeButton = new LightButtonNode('button', 'active');
echo $activeButton->render() . "\n";

// Зміна стану кнопки на 'inactive'
$activeButton->setState('inactive');
echo $activeButton->render() . "\n";
?>
