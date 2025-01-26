<?php

namespace App\Payment\Stripe;

use App\Payment\Interfaces\PaymentGateway;

class StripePaymentGateway implements PaymentGateway
{
    public function client()
    {
        echo "Initiate stripe API client.\n";
    }

    public function pay()
    {
        echo "Customer pay $10.00 to Stripe\n";
    }

    public function refund()
    {
        echo "Stripe refunded $10.00 to customer.\n";
    }
}
