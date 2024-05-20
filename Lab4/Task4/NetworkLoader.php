<?php

// Клас для завантаження зображень з мережі
class NetworkLoader
{
    // Метод для завантаження зображення з вказаного URL
    public function load($url)
    {
        // Перевіряємо, чи URL доступний
        $headers = get_headers($url);
        if (strpos($headers[0], '200')) {
            // Завантажуємо зображення за допомогою file_get_contents
            $imageData = file_get_contents($url);
            return $imageData;
        } else {
            // Якщо URL недоступний, повертаємо порожні дані
            return null;
        }
    }
}