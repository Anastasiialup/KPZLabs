<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Inventory</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h2>Zoo Inventory</h2>
<h3>Animals</h3>
<table>
    <tr>
        <th>Name</th>
        <th>Species</th>
        <th>Food</th>
        <th>Cage</th>
    </tr>
    <?php
    require_once 'Animal.php';
    require_once 'Inventory.php';
    require_once 'Cage.php';

    // Створення тварин

    $lion = new Animal("Simba", "Lion", "Meat", new Cage("Перша клітка", "big"));
    $elephant = new Animal("Dumbo", "Elephant", "Grass", new Cage("Друга клітка", "huge"));



    // Формування масиву тварин
    $animals = [$lion, $elephant];

    // Виведення тварин у вигляді таблиці
    foreach ($animals as $animal) {
        echo "<tr>";
        echo "<td>" . $animal->getName() . "</td>";
        echo "<td>" . $animal->getSpecies() . "</td>";
        echo "<td>" . $animal->getFood() . "</td>";
        echo "<td>" . $animal->getCage() . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<h3>Employees</h3>
<table>
    <tr>
        <th>Name</th>
        <th>Position</th>
    </tr>
    <?php
    require_once 'Zookeeper.php';

    // Створення працівників зоопарку
    $keeper1 = new Zookeeper("John", "Zookeeper");
    $keeper2 = new Zookeeper("Alice", "Veterinarian");

    // Формування масиву працівників
    $employees = [$keeper1, $keeper2];

    // Виведення працівників у вигляді таблиці
    foreach ($employees as $employee) {
        echo "<tr>";
        echo "<td>" . $employee->getName() . "</td>";
        echo "<td>" . $employee->getPosition() . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
