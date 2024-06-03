<?php
session_start();

require_once __DIR__ . '/../../Controllers/AuthController.php';
require_once __DIR__ . '/../../Models/User.php';
require_once __DIR__ . '/../../../config/database.php';

use App\Controllers\AuthController;
use App\Models\User;

//$conn??? what's it?
$userModel = new User($conn);
$authController = new AuthController($userModel);

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Обробка відправленої форми тільки у випадку, якщо REQUEST_METHOD встановлено і дорівнює "POST"
    $authController->login($_POST['username'], $_POST['password']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/app/static/css/login.css">
</head>
<body>
<div class="container">
    <h2>Вхід на сайт</h2>
    <form action="" method="post">
        <label for="username">Логін:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Увійти">
    </form>
    <p>Ще не зареєстровані? <a href="register.php">Зареєструватися тут</a>.</p>
</div>
</body>
</html>
