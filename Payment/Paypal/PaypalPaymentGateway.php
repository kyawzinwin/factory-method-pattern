<?php

namespace App\Payment\Paypal;

use App\Payment\Interfaces\PaymentGateway;

class PaypalPaymentGateway implements PaymentGateway
{
    public function client()
    {
        echo "Initiate paypal API client.\n";
    }

    public function pay()
    {
        echo "Customer pay $10.00 to Paypal\n";
    }

    public function refund()
    {
        echo "Paypal refunded $10.00 to customer.\n";
    }
}
