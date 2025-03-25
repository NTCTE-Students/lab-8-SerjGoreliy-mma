<?php

class Device {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getInfo() {
        return "{$this->brand} - {$this->model}";
    }
}

class Smartphone extends Device {
    public function call() {
        return "Звонить с {$this->model}.";
    }
}

class Laptop extends Device {
    public function work() {
        return "Работать с {$this->model}.";
    }
}

class Tablet extends Device {
    public function browse() {
        return "Листать браузер с {$this->model}.";
    }
}

$smartphone = new Smartphone("Apple", "iPhone 13");
$laptop = new Laptop("Poco", "X3 PRO");
$tablet = new Tablet("Samsung", "A6(2018)");
