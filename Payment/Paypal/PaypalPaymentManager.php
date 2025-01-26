<?php

namespace App\Payment\Paypal;

use App\Payment\Abstract\PaymentManager;
use App\Payment\Interfaces\PaymentGateway;

class PaypalPaymentManager extends PaymentManager
{
    public function getPaymentGateway(): PaymentGateway
    {
        return new PaypalPaymentGateway;
    }
}

