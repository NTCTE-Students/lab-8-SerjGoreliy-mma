<?php

abstract class Payment {
    abstract public function process();
}
class CreditCardPayment extends Payment {
    public function process() {
        print "Обработка платежа через кредитную карту.<br>";
    }
}

class PayPalPayment extends Payment {
    public function process() {
        print "Обработка платежа через PayPal.<br>";
    }
}

class BankTransferPayment extends Payment {
    public function process() {
        print "Обработка платежа через банковский перевод.<br>";
    }
}

$payment1 = new CreditCardPayment();
$payment2 = new PayPalPayment();
$payment3 = new BankTransferPayment();

$payment1->process();
$payment2->process();
$payment3->process();