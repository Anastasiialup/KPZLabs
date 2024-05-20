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
    private $items = [];

    public function addItem($product) {
        $this->items[] = $product;
    }

    public function totalPrice() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }
}

// Непотрібний Data Class, який містить лише поля та методи доступу до них
class Customer {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

// Основна логіка програми
$cart = new ShoppingCart();
$cart->addItem(new Product("Phone", 500));
$cart->addItem(new Product("Laptop", 1000));

echo "Total price: " . $cart->totalPrice();
