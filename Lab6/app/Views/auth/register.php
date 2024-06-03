<?php
session_start();

require_once __DIR__ . '/../../Controllers/AuthController.php';
require_once __DIR__ . '/../../Models/User.php';
require_once __DIR__ . '/../../../config\database.php';

use App\Controllers\AuthController;
use App\Models\User;

//$conn ???
$userModel = new User($conn);
$authController = new AuthController($userModel);

// Обробка відправленої форми
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $authController->register($_POST['username'], $_POST['password'], $_POST['email']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/app/static/css/register.css">
</head>
<body>
<div class="container">
    <h2>Реєстрація</h2>
    <form action="" method="post">
        <label for="username">Логін:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <label for="email">Електронна пошта:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Зареєструватися">
    </form>
    <p>Вже зареєстровані? <a href="login.php">Увійти тут</a>.</p>
</div>
</body>
</html>
