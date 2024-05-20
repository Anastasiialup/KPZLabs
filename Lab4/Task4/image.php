<?php

// Інтерфейс стратегії для завантаження картинок
interface ImageLoadingStrategy {
    public function load(string $href): string;
}

// Реалізація стратегії для завантаження картинок з мережі
class NetworkImageLoadingStrategy implements ImageLoadingStrategy {
    public function load(string $href): string {
        // Логіка завантаження картинки з мережі
        return "Loading image from network: $href";
    }
}

// Реалізація стратегії для завантаження картинок з файлової системи
class FileSystemImageLoadingStrategy implements ImageLoadingStrategy {
    public function load(string $href): string {
        // Логіка завантаження картинки з файлової системи
        return "Loading image from file system: $href";
    }
}


class Image {
    private $loadingStrategy;
    private $loadedImage;

    public function __construct(ImageLoadingStrategy $loadingStrategy) {
        $this->loadingStrategy = $loadingStrategy;
    }

    public function load(string $href) {
        $this->loadedImage = $this->loadingStrategy->load($href);
    }

    public function isLoaded() {
        return !empty($this->loadedImage);
    }

    public function getPath() {
        return $this->loadedImage;
    }
}


// Створюємо об'єкт зображення з використанням стратегії завантаження з мережі
$image = new Image(new NetworkImageLoadingStrategy());

// Завантажуємо зображення
$result = $image->load("https://pwa-api.eva.ua/img/512/512/resize/4/3/439853_1_1709628520.jpg");

echo $result;

?>
