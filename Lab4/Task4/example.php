<?php
require_once 'image.php';
require_once 'NetworkLoader.php'; // Підключаємо клас Image

// Створюємо об'єкт зображення з мережі та передаємо його як аргумент конструктору класу Image
$networkImage = new Image(new NetworkImageLoadingStrategy());

// Спробуємо завантажити зображення з інтернету
$networkImage->load("https://pwa-api.eva.ua/img/512/512/resize/4/3/439853_1_1709628520.jpg");

// Перевіряємо, чи вдалося завантажити зображення
if ($networkImage->isLoaded()) {
    // Якщо так, виводимо тег <img> з URL зображення
    echo '<img src="' . $networkImage->getPath() . '" alt="Loaded Image">';
} else {
    // Якщо завантаження не вдалося, виводимо повідомлення про помилку
    echo 'Failed to load image from network.';
}
?>
