<?php

namespace App\Payment\Stripe;

use App\Payment\Abstract\PaymentManager;
use App\Payment\Interfaces\PaymentGateway;

class StripePaymentManager extends PaymentManager
{
    public function getPaymentGateway(): PaymentGateway
    {
        return new StripePaymentGateway;
    }
}

