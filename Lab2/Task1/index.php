<?php

require_once 'WebSite.php';
require_once 'ManagerCall.php';
require_once 'MobileApp.php';

// Створення підписок через веб-сайт
$webSite = new WebSite();
$domesticSubscription = $webSite->createSubscription('domestic');
$educationalSubscription = $webSite->createSubscription('educational');
$premiumSubscription = $webSite->createSubscription('premium');

echo "Subscriptions created via website:\n";
echo "Domestic subscription: {$domesticSubscription->getDescription()}\n";
echo "Educational subscription: {$educationalSubscription->getDescription()}\n";
echo "Premium subscription: {$premiumSubscription->getDescription()}\n\n";

// Створення підписок через дзвінок менеджера
$managerCall = new ManagerCall();
$domesticSubscription = $managerCall->createSubscription('domestic');
$educationalSubscription = $managerCall->createSubscription('educational');
$premiumSubscription = $managerCall->createSubscription('premium');

echo "Subscriptions created via manager call:\n";
echo "Domestic subscription: {$domesticSubscription->getDescription()}\n";
echo "Educational subscription: {$educationalSubscription->getDescription()}\n";
echo "Premium subscription: {$premiumSubscription->getDescription()}\n\n";

// Створення підписок через мобільний додаток
$mobileApp = new MobileApp();
$domesticSubscription = $mobileApp->createSubscription('domestic');
$educationalSubscription = $mobileApp->createSubscription('educational');
$premiumSubscription = $mobileApp->createSubscription('premium');

echo "Subscriptions created via mobile app:\n";
echo "Domestic subscription: {$domesticSubscription->getDescription()}\n";
echo "Educational subscription: {$educationalSubscription->getDescription()}\n";
echo "Premium subscription: {$premiumSubscription->getDescription()}\n\n";
