<?php

abstract class Order {
    abstract public function calculateTotal();
}

class OnlineOrder extends Order {
    public function calculateTotal() {
        print "Обработка онлайн заказа с учетом скидки и налога.<br>";
    }
}

class StoreOrder extends Order {
    public function calculateTotal() {
        print "Обработка заказа в магазине с учетом налога.<br>";
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal() {
        print "Обработка заказа по телефону с учетом скидки.<br>";
    }
}

$onlineOrder = new OnlineOrder();
$storeOrder = new StoreOrder();
$telephoneOrder = new TelephoneOrder();

$onlineOrder->calculateTotal();
$storeOrder->calculateTotal();
$telephoneOrder->calculateTotal();