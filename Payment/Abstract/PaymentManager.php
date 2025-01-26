<?php

namespace App\Payment\Abstract;

use App\Payment\Interfaces\PaymentGateway;

abstract class PaymentManager
{
    abstract public function getPaymentGateway(): PaymentGateway;

    public function makePayment()
    {
        $payment = $this->getPaymentGateway();

        $payment->client();
        $payment->pay();
    }

    public function makeRefund()
    {
        $payment = $this->getPaymentGateway();

        $payment->client();
        $payment->refund();
    }
}