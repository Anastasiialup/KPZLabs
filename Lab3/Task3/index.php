<?php
require_once 'Shape.php';
require_once 'Renderer.php';
require_once 'VectorRenderer.php';
require_once 'RasterRenderer.php';
require_once 'Circle.php';
require_once 'Square.php';
require_once 'Triangle.php';

// Створення рендерерів
$vectorRenderer = new VectorRenderer();
$rasterRenderer = new RasterRenderer();

// Створення фігур і виклик методу draw()
$circle = new Circle($vectorRenderer);
$square = new Square($rasterRenderer);
$triangle = new Triangle($vectorRenderer);

$circle->draw();
$square->draw();
$triangle->draw();
?>
