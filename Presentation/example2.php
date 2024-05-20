<?php

class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

class ShoppingCart {
    private $products = [];

    public function addProduct($name, $price) {
        $product = new Product($name, $price);
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }
}

// Засмічувач коду: клас PromoManager, який не використовується у програмі
class PromoManager {
    public function applyPromo($cart) {
        // Цей метод мав би застосовувати знижки до замовлення, але не використовується
        return "Застосування знижки до замовлення";
    }
}

// Основна логіка програми
$cart = new ShoppingCart();
$cart->addProduct("Футболка", 89.99);
$cart->addProduct("Джинси", 199.99);