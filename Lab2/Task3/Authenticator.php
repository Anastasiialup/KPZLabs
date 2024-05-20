<?php

// Файл: Authenticator.php

class Authenticator
{
    private static $instance;
    private $loggedInUser;

    private function __construct()
    {
        // Закриваємо конструктор, щоб заборонити створення нових екземплярів ззовні
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function login($user)
    {
        $this->loggedInUser = $user;
        echo "User '{$user}' logged in." . PHP_EOL;
    }

    public function logout()
    {
        echo "User '{$this->loggedInUser}' logged out." . PHP_EOL;
        $this->loggedInUser = null;
    }

    public function getLoggedInUser()
    {
        return $this->loggedInUser;
    }
}
