<?php
function calculatePrice($quantity, $price) {
    // Функція приймає кількість та ціну товару і обчислює загальну вартість
    return $quantity * $price; // Обчислюємо ціну, множачи кількість на ціну одиниці товару
}

function tePrice($quantity, $price)
{
    return $quantity * $price; // Повертаємо результат - ціну
}

// Коментарі до додаткового функціоналу:
// function calculateTax($subtotal, $taxRate) {
//     // Функція приймає загальну вартість товарів і податкову ставку та обчислює суму податку
//     $taxAmount = $subtotal * ($taxRate / 100); // Обчислюємо суму податку
//     return $taxAmount; // Повертаємо суму податку
// }