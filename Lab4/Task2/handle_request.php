<?php
// handle_request2.php

require_once 'Aircraft.php';
require_once 'Runway.php';
require_once 'CommandCentre.php';

// Перевіряємо, чи метод запиту є POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримуємо дані з форми
    $aircraftName = $_POST['aircraft_name'];
    $action = $_POST['action'];
    $runwayId = $_POST['runway_id'];

    // Створюємо об'єкти літака та злітної смуги
    $aircraft = new Aircraft($aircraftName);
    $runway = new Runway();

    // Створюємо масив злітних смуг та літаків
    $runways = [$runway];
    $aircrafts = [$aircraft];

    // Створюємо командний центр з переданими злітними смугами та літаками
    $commandCentre = new CommandCentre($runways, $aircrafts);

    // Виконуємо дії залежно від вибраної опції
    switch ($action) {
        case 'land':
            $commandCentre->landAircraft($aircraft, $runway);
            break;
        case 'take_off':
            $commandCentre->takeOffAircraft($aircraft, $runway);
            break;
        default:
            echo "Invalid action selected!";
    }

    // Виводимо результати
    echo "<h2>Result:</h2>";
    echo "<p>Aircraft {$aircraft->Name} status: " . ($aircraft->IsTakingOff ? "Taking Off" : "Landed") . "</p>";
    echo "<p>Runway {$runway->Id} status: " . ($runway->IsBusyWithAircraft ? "Busy" : "Free") . "</p>";
} else {
    // Якщо форма не була відправлена методом POST, виконуємо інші дії або перенаправляємо користувача
    // Ваш код для обробки GET-запиту або перенаправлення
}
?>
