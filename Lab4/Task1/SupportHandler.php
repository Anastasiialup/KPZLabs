<?php
// Файл: SupportHandler.php
abstract class SupportHandler {
    protected $nextHandler;

    public function setNextHandler(SupportHandler $handler) {
        $this->nextHandler = $handler;
    }

    public function handleRequest($level) {
        if ($this->nextHandler !== null) {
            return $this->nextHandler->handleRequest($level);
        } else {
            return "Invalid support level!";
        }
    }
}

require_once 'BasicSupportHandler.php';
require_once 'PremiumSupportHandler.php';
require_once 'UltimateSupportHandler.php';
require_once 'FreeSupportHandler.php';

// Перевіряємо, чи метод запиту є POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedLevel = $_POST['support_level'];

    // Створюємо об'єкти рівнів підтримки
    $basicHandler = new BasicSupportHandler();
    $premiumHandler = new PremiumSupportHandler();
    $ultimateHandler = new UltimateSupportHandler();
    $freeHandler = new FreeSupportHandler(); // Створюємо об'єкт для нового рівня підтримки

    // Встановлюємо ланцюжок відповідальності
    $basicHandler->setNextHandler($premiumHandler);
    $premiumHandler->setNextHandler($ultimateHandler);
    $ultimateHandler->setNextHandler($freeHandler); // Додаємо обробник для нового рівня підтримки

    // Обробляємо вибраний рівень підтримки
    $result = $basicHandler->handleRequest($selectedLevel);

    // Виводимо результат користувачу
    echo "<h2>Result:</h2>";
    echo "<p>$result</p>";
    exit(); // Зупиняємо виконання скрипта після виводу результату
}

// Якщо форма не була відправлена методом POST, перенаправляємо користувача на головну сторінку
header("Location: index.php");
exit(); // Зупиняємо виконання скрипта після перенаправлення
