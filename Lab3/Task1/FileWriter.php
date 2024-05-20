<?php

// Клас, що відповідає за запис у файл
class FileWriter
{
    public function Write($message) {
        echo "Calling Write method with message: $message\n"; // Виведення повідомлення перед записом
        // Логіка запису в файл
    }

    public function WriteLine($message) {
        echo "Calling WriteLine method with message: $message\n"; // Виведення повідомлення перед записом
        // Логіка запису рядка в файл
    }
}

?>
