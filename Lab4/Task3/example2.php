<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LightHTML Example</title>

</head>
<body>
<?php
require_once 'LightNode.php'; // Підключаємо файл з класами мови розмітки

// Створюємо елементи таблиці
$table = new LightElementNode('table', 'block', 'pair', 'table', []);

// Створюємо рядки таблиці
$row1 = new LightElementNode('tr', 'block', 'pair', 'row', []);
$row2 = new LightElementNode('tr', 'block', 'pair', 'row', []);

// Створюємо текстові вузли для імен та адрес електронної пошти
$name1 = new LightTextNode('John');
$email1 = new LightTextNode('Doe');
$name2 = new LightTextNode('Jane');
$email2 = new LightTextNode('Smith');

// Додаємо текстові вузли до рядків таблиці
$row1->addChild(new LightElementNode('td', 'inline', 'single', '', [$name1]));
$row1->addChild(new LightElementNode('td', 'inline', 'single', '', [$email1]));
$row2->addChild(new LightElementNode('td', 'inline', 'single', '', [$name2]));
$row2->addChild(new LightElementNode('td', 'inline', 'single', '', [$email2]));

// Додаємо рядки до таблиці
$table->addChild($row1);
$table->addChild($row2);

// Виводимо HTML
echo $table->render();
?>

<script>
    // Скрипт JavaScript для обробки подій
    document.addEventListener('DOMContentLoaded', function() {
        var rows = document.getElementsByClassName('row');
        for (var i = 0; i < rows.length; i++) {
            rows[i].addEventListener('click', function() {
                alert('Row clicked!');
            });

            rows[i].addEventListener('mouseover', function(event) {
                var name = this.children[0].innerText;
                var email = this.children[1].innerText;
                this.title = 'Name: ' + name + '\nEmail: ' + email;
            });
        }
    });
</script>

</body>
</html>
