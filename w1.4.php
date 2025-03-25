<?php

class Animal {
    public function eat() {
        return "Ест";
    }

    public function sleep() {
        return "Спит";
    }
}

class Bird extends Animal {
    public function fly() {
        return "Летает";
    }
}

class Fish extends Animal {
    public function swim() {
        return "Плавает";
    }
}

class Mammal extends Animal {
    public function walk() {
        return "Идет";
    }
}

$bird = new Bird();
$fish = new Fish();
$mammal = new Mammal();

