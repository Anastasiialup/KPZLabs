<?php
// Файл: index.php

require_once 'Authenticator.php';

// Спроба створити новий екземпляр Authenticator
//$authenticator = new Authenticator(); // Це призведе до помилки, оскільки конструктор приватний

// Отримання єдиного екземпляра Authenticator
$authenticator1 = Authenticator::getInstance();
$authenticator2 = Authenticator::getInstance();

// Перевірка, чи це один і той же екземпляр
if ($authenticator1 === $authenticator2) {
    echo "authenticator1 and authenticator2 are the same instance." . PHP_EOL;
} else {
    echo "authenticator1 and authenticator2 are different instances." . PHP_EOL;
}

// Логін користувача через перший екземпляр
$authenticator1->login("user1");

// Отримання залогіненого користувача через другий екземпляр
echo "Logged in user: " . $authenticator2->getLoggedInUser() . PHP_EOL;

// Вихід користувача через перший екземпляр
$authenticator1->logout();

// Вихід користувача через другий екземпляр
$authenticator2->logout();
