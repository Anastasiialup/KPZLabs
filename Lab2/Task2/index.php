<?php

// Файл: index.php

require_once 'IProne.php';
require_once 'Kiaomi.php';
require_once 'Balaxy.php';

// Функція для виведення опису пристрою
function printDeviceDescription($device)
{
    echo $device->getDescription() . PHP_EOL;
}

// Створюємо фабрики для кожного бренду
$iproneFactory = new IProne("IProne");
$kiaomiFactory = new Kiaomi("Kiaomi");
$balaxyFactory = new Balaxy("Balaxy");

// Створюємо різні пристрої для кожного бренду
$iproneLaptop = $iproneFactory->createLaptop();
$kiaomiNetbook = $kiaomiFactory->createNetbook();
$balaxyEBook = $balaxyFactory->createEBook();
$iproneSmartphone = $iproneFactory->createSmartphone();

// Виводимо опис кожного пристрою
printDeviceDescription($iproneLaptop);
printDeviceDescription($kiaomiNetbook);
printDeviceDescription($balaxyEBook);
printDeviceDescription($iproneSmartphone);
