<?php
require_once('C:\wamp64\www\KPZLabs\Lab6\config\database.php');
require_once('C:\wamp64\www\KPZLabs\Lab6\app\Models\FinancialRecord.php');
require_once('C:\wamp64\www\KPZLabs\Lab6\app\Models\Category.php');

use App\Models\FinancialRecord;
use App\Models\Category;

session_start();
if (!isset($_SESSION['user_id'])) {
    // Якщо user_id не збережено у сесії, можливо, користувач не увійшов у систему, перенаправте його на сторінку входу
    header("Location: ../profile/profile.php");
    exit;
}

// Отримання фінансових записів з бази даних за допомогою класу FinancialRecord
$records = FinancialRecord::getAll($conn);

// Перевірка, чи існує ключ REQUEST_METHOD та чи він є POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['month'])) {
    $month = $_POST['month'];
    $year = $_POST['year'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $attachment = $_POST['attachment'];
    $currency = $_POST['currency'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];
    $user_id = $_SESSION['user_id']; // Припускається, що ми маємо user_id у сесії

    // Додавання нового фінансового запису за допомогою класу FinancialRecord
    FinancialRecord::add($conn, $user_id, $month, $year, $category_id, $description, $attachment, $currency, $amount, $type);

    // Перенаправлення після додавання запису (за бажанням)
    header("Location: records.php");
    exit;
}

// Видалення запису, якщо ID запису передано через URL параметр
if (isset($_GET['delete_record'])) {
    $id = $_GET['delete_record'];

    // Видалення фінансового запису за допомогою класу FinancialRecord
    FinancialRecord::delete($conn, $id);

    // Перенаправлення після видалення запису (за бажанням)
    header("Location: records.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Records</title>
    <link rel="stylesheet" href="/app/static/css/records.css">
</head>
<body>
<?php include('../partials/header.php'); ?>
<!-- Фільтри -->
<div>
    <label for="category-filter">Filter by Category:</label>
    <select id="category-filter">
        <option value="">All</option>
        <?php
        // Отримання категорій з бази даних
        $categories = Category::getAll($conn, $_SESSION['user_id']);

        // Виведення категорій у випадаючому списку
        foreach ($categories as $category) {
            echo "<option value='".$category['id']."'>".$category['name']."</option>";
        }
        ?>
    </select>

    <button id="apply-filters">Apply Filters</button>
</div>
<!-- Таблиця для відображення фінансових записів -->
<table id="records-table">
    <thead>
    <tr>
        <th>Month</th>
        <th>Year</th>
        <th>Category</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($records as $record): ?>
        <tr data-category-id="<?php echo $record['category_id']; ?>">
            <td><?php echo $record['month']; ?></td>
            <td><?php echo $record['year']; ?></td>
            <td><?php $category = Category::getById($conn, $record['category_id']); echo $category['name']; ?></td>
            <td><?php echo $record['description']; ?></td>
            <td><?php echo $record['currency'] . ' ' . $record['amount']; ?></td>
            <td><a href="?delete_record=<?php echo $record['id']; ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="month">Month:</label><br>
    <input type="text" id="month" name="month" required><br>
    <label for="year">Year:</label><br>
    <input type="number" id="year" name="year" required><br>
    <label for="category_id">Category:</label><br>
    <select id="category_id" name="category_id" required>
        <?php
        // Виведення категорій у випадаючому списку
        foreach ($categories as $category) {
            echo "<option value='".$category['id']."'>".$category['name']."</option>";
        }
        ?>
    </select><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" required><br>
    <label for="attachment">Attachment:</label><br>
    <input type="text" id="attachment" name="attachment" step="0.01" required><br>
    <label for="currency">Currency:</label><br>
    <input type="text" id="currency" name="currency" required><br>
    <label for="amount">Amount:</label><br>
    <input type="number" id="amount" name="amount" step="0.01" required><br>
    <label for="type">Type:</label><br>
    <select id="type" name="type" required>
        <option value="income">Income</option>
        <option value="expense">Expense</option>
    </select><br>
    <button type="submit">Add Record</button>
</form>
<script>
    document.getElementById('apply-filters').addEventListener('click', function() {
        var categoryFilter = document.getElementById('category-filter').value;
        var tableRows = document.querySelectorAll('#records-table tbody tr');

        tableRows.forEach(function(row) {
            var categoryId = row.getAttribute('data-category-id');

            if (categoryFilter === '' || categoryId === categoryFilter) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
<?php include('../partials/footer.php'); ?>
</body>
</html>