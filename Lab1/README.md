# Лабораторні роботи з конструювання програмного забезпечення

## Лабораторна робота №1

### Опис

У цій лабораторній роботі створюється система класів для обліку зоопарку, а також код для тестування отриманої функціональності.

### Завдання 0: Підготовка до виконання завдання

1. Створено [окремий публічний репозиторій](https://github.com/Anastasiialup/KPZ.git) на GitHub.
2. Впевнитися, що репозиторій публічний.
3. Склоновано створений репозиторій.
4. Створено директорію `Lab1`.
5. Обрано [варіант завдання](./Lab1#tasks).

### Завдання 1: Створення системи класів для обліку зоопарку

#### Особливості дотримання принципів програмування

1. **DRY (Don't Repeat Yourself)**:
   - У коді використовується підхід DRY, наприклад, у класі `Animal`, де визначаються загальні методи `getName()` та `getSpecies()`, які використовуються для отримання назви та виду тварини відповідно.

2. **KISS (Keep It Simple, Stupid)**:
   - Код створений таким чином, щоб бути простим та зрозумілим. Наприклад, класи `Animal`, `Cage`, `Equipment`, `Food` та `Zookeeper` мають прості та зрозумілі структури, не перевантажені зайвими деталями.

3. **SOLID**:
   - **Single Responsibility Principle (Принцип єдиного обов'язку)**: Кожен клас відповідає за одну конкретну функціональність, наприклад, клас `Animal` відповідає за представлення тварин.
   - **Open/Closed Principle (Принцип відкритості/закритості)**: Код створений таким чином, щоб його можна було розширити новими класами без зміни вже існуючого коду.
   - **Liskov Substitution Principle (Принцип заміщення Лісков)**: Всі класи спадкоємці класу `Animal` можуть бути використані взаємозамінно без зміни функціональності.
   - **Interface Segregation Principle (Принцип розділення інтерфейсу)**: Використання інтерфейсів там, де це потрібно, наприклад, в класі `Inventory`.
   - **Dependency Inversion Principle (Принцип інверсії залежностей)**: Класи залежать від абстракцій, а не від конкретних реалізацій.

4. **YAGNI (You Aren't Gonna Need It)**:
   - Код створений таким чином, щоб він вирішував поточні проблеми, а не передбачав надлишкову функціональність, яку можливо буде потрібно у майбутньому.

5. **Composition Over Inheritance**:
   - У класі `Inventory` використовується композиція для агрегації об'єктів тварин і працівників зоопарку.

6. **Program to Interfaces not Implementations**:
   - Класи програмуються на основі інтерфейсів, а не конкретних реалізацій, наприклад, в класі `Inventory`.

7. **Fail Fast**:
   - У коді використовуються перевірки на помилки та виняткові ситуації для виявлення та обробки проблем якомога швидше, уникнення непередбачених помилок у виконанні програми. Наприклад:
     - Клас `Animal` має конструктор, який приймає параметр `$cage` типу `Cage`. Однак, якщо цей параметр не передано, він приймає значення за замовчуванням `null`, що дозволяє уникнути виникнення помилок, коли клітка не є обов'язковою для кожної тварини.
     - У методі `displayAnimals()` класу `Inventory` використовується перевірка наявності клітки для кожної тварини, щоб визначити, чи потрібно виводити інформацію про клітку.
     - У конструкторі класу `Animal` проводиться перевірка переданого об'єкту `Cage` для уникнення передачі неправильного типу даних та виявлення помилок при використанні класу.

### Завдання 2: Написання коду для тестування функціональності

Для тестування функціональності створено `index.php`, де перевіряється вивід інформації про тварин та працівників зоопарку.
